<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Home page</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
  <link rel="stylesheet" href="..\css\mystyl.css">
</head>
<body>
  <!-- main cotainer start -->
  <div class="container">
    <!-- header start -->
    <header>
      <div class="leftside">
        <h3>QUIZ<span>UP</span></h3>
      </div>
      <div class="rightside">
        <a class="logout_btn" href="..\index.php">Logout</a>
      </div>
    </header>
<!-- header end -->
<!-- sidebar start -->
      <aside class="sidebar">
          <div id="bar"></div>
        <div class="user_info">
            <img src="..\imgs\37908.png" alt="profile">
            <h4>Emmanuel</h4>
        </div>
        <ul>
            <li><a class="fa fa-users active" href="#"><span>Class</span></a></li>
            <li><a class="fa fa-user" href="#"><span>Students</span></a></li>
            <li><a class="fa fa-desktop" href="#"><span>Courses</span></a></li>
            <li><a class="fa fa-th" href="#"><span>Questions</span></a></li>
            <li><a class="fa fa-desktop" href="#"><span>Report</span></a></li>
            <li><a class="fa fa-info-circle" href="#"><span>Help</span></a></li>
            <li><a class="fa fa-cogs" href="#"><span>Settings</span></a></li>
      </ul>
      </aside>

	<main>
      <h1 id="title">Class</h1>
        <div id="class"><?php include '../includes/class.layout.php'; ?></div>
        <div id="courses"><?php include '../includes/courses.layout.php' ?></div>
        <div id="help"><?php include '../includes/help.layout.php'; ?></div>
        <div id="questions"><?php include '../includes/question.layout.php'; ?></div>
        <div id="report"><?php include '../includes/report.layout.php'; ?></div>
        <div id="settings"><?php include '../includes/settings.layout.php'; ?></div>
        <div id="students"><?php include '../includes/students.layout.php'; ?></div>
	</main>

	<!-- end of content -->
  </div> 
  <!-- main cotainer end -->
    <script src="../js/dashboard.js"></script>
</body>
</html>C:\Users\emmanuel\QuizApp\others\admin.php