<?php

return [

	/*
	 * Users table used to store users
	 */
	'users_table' => 'users',

	/*
	 * User model used by Access to create correct relations. Update the user if it is in a different namespace.
	*/
	'user' => App\Models\Actor\User\User::class,

	/*
	 * Brand model used by Access to create correct relations. Update the brand if it is in a different namespace.
	*/
	'brand' => App\Models\Actor\Brand\Brand::class,

	/*
	 * Brands table used to store brands
	 */
	'brands_table' => 'brands',

	/*
	 * Role model used by Access to create correct relations. Update the role if it is in a different namespace.
	*/
	'role' => App\Models\Actor\User\Role\Role::class,

	/*
	 * Roles table used by Access to save roles to the database.
	 */
	'roles_table' => 'user_roles',

	/*
	 * Permission model used by Access to create correct relations.
	 * Update the permission if it is in a different namespace.
	 */
	'permission' => App\Models\Actor\User\Permission\Permission::class,

	/*
	 * Permissions table used by Access to save permissions to the database.
	 */
	'permissions_table' => 'user_permissions',

	/*
	 * PermissionGroup model used by Access to create permissions groups.
	 * Update the group if it is in a different namespace.
	 */
	'group' => App\Models\Actor\User\Permission\PermissionGroup::class,

	/*
	 * Permissions table used by Access to save permissions to the database.
	 */
	'permission_group_table' => 'user_permission_groups',

	/*
	 * permission_role table used by Access to save relationship between permissions and roles to the database.
	 */
	'permission_role_table' => 'user_permission_role',

	/*
	 * permission_user table used by Access to save relationship between permissions and users to the database.
	 * This table is only for permissions that belong directly to a specific user and not a role
	 */
	'permission_user_table' => 'user_permission_mux',

	/*
	 * Table that specifies if one permission is dependent on another.
	 * For example in order for a user to have the edit-user permission they also need the view-admin permission.
	 */
	'permission_dependencies_table' => 'user_permission_dependencies',

	/*
	 * PermissionDependency model used by Access to create permissions dependencies.
	 * Update the dependency if it is in a different namespace.
	 */
	'dependency' => App\Models\Actor\User\Permission\PermissionDependency::class,

	/*
	 * assigned_roles table used by Access to save assigned roles to the database.
	 */
	'assigned_roles_table' => 'user_assigned_roles',

	/*
	 * assigned_brands_roles table used as intermediate table between users,brands and roles.
	 */
	'assigned_brands_roles_table' => 'user_assigned_brands_roles',

	/*
	 * Configurations for the user
	 */
	'users' => [
		/*
		 * Administration tables
		 */
		'default_per_page' => 25,

		/*
		 * The role the user is assigned to when they sign up from the app, not namespaced
		 */
		'default_role' => 'User',
		//'default_role' => 2,

		/*
		 * Whether or not the user has to confirm their email when signing up
		 */
		'confirm_email' => true,

		/*
		 * Whether or not the users email can be changed on the edit profile screen
		 */
		'change_email' => true,
	],

	/*
	 * Configuration for roles
	 */
	'roles' => [
		/*
		 * Whether a role must contain a permission or can be used standalone as a label
		 */
		'role_must_contain_permission' => true
	],

	/*
	 * Socialite session variable name
	 * Contains the name of the currently logged in provider in the users session
	 * Makes it so social logins can not change passwords, etc.
	 */
	'socialite_session_name' => 'socialite_provider',

];
