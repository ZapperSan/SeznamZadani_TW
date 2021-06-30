<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>TW Zapletal</title>
    </head>
    <body>
		<h1>Zadani:</h1>
		<text><?php echo e($assignment->assignmentName); ?></text>
		<text><?php echo e($assignment->assignmentSubject); ?></text>
		<text><?php echo e($assignment->assignmentDesc); ?></text>
		<text><?php echo e($assignment->assignmentDeadline); ?></text>
		<text><?php echo e($assignment->assignmentDiff); ?></text>
    </body>
</html>
<?php /**PATH D:\wamp64\www\TW_Zapletal\resources\views/mainpage.blade.php ENDPATH**/ ?>