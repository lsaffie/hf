<?php
// $Id: views_plugin_access_perm.inc,v 1.1 2008/09/08 22:50:17 merlinofchaos Exp $

/**
 * Access plugin that provides no access control at all.
 */
class views_plugin_access_perm extends views_plugin_access {
  function access($account) {
    return user_access($this->options['perm'], $account);
  }

  function get_access_callback() {
    return array('user_access', array($this->options['role']));
  }

  function summary_title() {
    return t($this->options['perm']);
  }

  function option_defaults(&$options) {
    $options['perm'] = 'access content';
  }

  function options_form(&$form, &$form_state) {
    $perms = array();
    // Get list of permissions
    foreach (module_list(FALSE, FALSE, TRUE) as $module) {
      if ($permissions = module_invoke($module, 'perm')) {
        $perms[$module] = drupal_map_assoc($permissions);
      }
    }
    $form['perm'] = array(
      '#type' => 'select',
      '#options' => $perms,
      '#title' => t('Permission'),
      '#default_value' => $this->options['perm'],
      '#description' => t('Only users with the selected permission flag will be able to access this display. Note that users with "access all views" can see any view, regardless of other permissions.'),
    );
  }
}
