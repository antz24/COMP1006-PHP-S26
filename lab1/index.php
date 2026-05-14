<?php 
    $students = [
        ["name" => "Olivia", "score" => 72.07, "subject" => "Math"],
        ["name" => "Liam", "score" => 32.26, "subject" => "English"],
        ["name" => "Charlotte", "score" => 91.72, "subject" => "Physics"],
        ["name" => "Noah", "score" => 59.55, "subject" => "Biology"]
    ];

    function getGradeStatus($score)
    {
        if ($score >= 50) 
            {
               return "<span class='pass'>PASS</span>";
            }
        else
            {
                return "<span class='fail'>FAIL</span>";
            }
    }


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1, device-width=width">
    <title>Lab One</title>
    <meta name="description" content="This is a lab that was done in class">
    <meta name="robots" content="noindex, nofollow">
  </head>
  <body>
    <main>
        <section class="student-info">
            <?php if(empty($students)): ?>
                <p>No students found</p>
            <?php else:?>
                <?php foreach($students as $student): ?>
                    <div class="student-data">
                        <h3><?php echo htmlspecialchars($student['name']); ?></h3>
                        <p class="subject">Subject: <?php echo htmlspecialchars($student['subject']); ?></p>
                        <p class="status">Status: <?php echo getGradeStatus($student['score']); ?></p>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </section>
    </main>
    <footer class="system-status">
        <p>Total number of students processed: <?php echo count($students); ?></p>
        <p>Current time of report: <?php echo date('h:i:s A'); ?></p>
    </footer>
  </body>
</html>