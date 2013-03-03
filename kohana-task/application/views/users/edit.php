<?php defined('SYSPATH') or die('No direct script access.'); ?>
 
<h2>Create/Edit user</h2>
 
<?php echo Form::open('users/post/'.$user->id); ?>
    <?php echo Form::label("name", "Name"); ?>
    <br />
    <?php echo Form::input("name", $user->name); ?>
    <br />
    <br />
    <?php echo Form::label("surname", "Surname"); ?>
    <br />
    <?php echo Form::input("surname", $user->surname); ?>
    <br />
    <br />
	<?php echo Form::label("personal_number", "PESEL"); ?>
    <br />
    <?php echo Form::input("personal_number", $user->personal_number); ?>
    <br />
    <br />
	<?php echo Form::label("job_position", "Job Position"); ?>
    <br />
    <?php echo Form::input("job_position", $user->job_position); ?>
    <br />
    <br />
    <?php echo Form::submit("submit", "Submit"); ?>
<?php echo Form::close(); ?>

<?php echo HTML::anchor('users', "Return"); ?>
