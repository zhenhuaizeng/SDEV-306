
<!--bootstrap-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<div style = "display:grid; grid-template-columns: 1fr 1fr; grid-column-gap:30px" class = "text-center">
    <?php
    require '/home/zhenhuai/db.php';

    $sql = "INSERT INTO `project`(`project_id`, `project_name`, `project_description`, `project_reflection`) 
VALUES ('1', 'Financial Market Simulator', 'The purpose of the project is for me to create a self-guided project and show a variety of skills learned in JAVA class. The project is about a text finance game. You can buy and sell different kinds of investments—for example, gold, stock, house, and bond.
 Your goal is to earn as much as you can in days that players want. ','what i achieved from this project was to enhanced my Java skills. I would use these skills more in the future.');
 ";
    $result = @mysqli_query($cnxn, $sql);
    $sql = "INSERT INTO `project`(`project_id`, `project_name`, `project_description`, `project_reflection`) 
    VALUES ('2', 'Individual Portfolio Project: Database and Email', 'The purpose of this project is to add some features to my Resume and portfolio. I added some code, so the user can see the four projects that I want to highlight. I also added a form allowing users to leave their names, messages, and links. After the user finishes the form and clicks on the submit button, it will send me an email that tells me a user has filled out my form..','what i achieved from this project was a lot of experience from PHP And MySQL.');
     ";
    $result = @mysqli_query($cnxn, $sql);
    $sql = "INSERT INTO `project`(`project_id`, `project_name`, `project_description`, `project_reflection`) 
    VALUES ('3', 'Project: Working with Datasets', 'In this project, I leveraged JavaScript arrays and objects to help us explore a dataset containing real-world data about cars. I was able to choose my dataset and to both view the records in the dataset as well as calculating interesting values based on the data.','what i achieved from this project was to enhanced my JavaScript, HTML, CSS skills. I would use these skills more in the future.');
     ";
    $result = @mysqli_query($cnxn, $sql);
    $sql = "INSERT INTO `project`(`project_id`, `project_name`, `project_description`, `project_reflection`) 
    VALUES ('4', 'Proeject: credit card Application', 'During my software development class, I created a simulator that simulates the creation and processing of credit applications using the Producer-consumer pattern.','What I achieved from this project was how to implement thread in JAVA.');
     ";
    $result = @mysqli_query($cnxn, $sql);
    $sql = "SELECT * FROM project";
    $result = @mysqli_query($cnxn, $sql);

    while($row = mysqli_fetch_assoc($result))
    {
        $projectName = $row['project_name'];
        $projectD = $row['project_description'];
        $projectR = $row['project_reflection'];
        echo "<div style = 'font-size:30px; margin-top:150px;border: solid black 2px; border-radius:6px;'><p><strong>$projectName</strong></p><p> $projectName - $projectD -- $projectR </p></div>";
    }

    ?>

</div>




