<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.html");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
<title>quickjot</title>
<link rel="stylesheet" href="../green.css">
</head>
<body>

<section>
<h1 style="float: center;">quickjot</h1>

</section>

<section> 
<nav>
    <ul>
        <li class="navbar"><a href="profile.html.php">profile</a></li>
        <li class="navbar"><a href="folders.html">folders</a></li>
        <li class="navbar"><a href="habitTracker.html">habit tracker</a></li>
    </ul>
</nav>


<article>
<button onclick="savePlannerData()">Save Planner</button>

<table>
    <tr>
        <th class="day-header">monday</th>
        <th>♡︎</th>
    </tr>
    <tr>
      <th>  <div>
            <div class="planner">
                <div class="todoheader">
                    <input type="text" class="todo-input" placeholder="scheduled events">
                    <span onclick="newElement()" class="addBtn">Add</span>
                  </div>
                  <br>
                  <ul class="myUL">
                  </ul>
            </div></th>
      <th> <div class="planner">
                <div class="todoheader">
                    <input type="text" class="todo-input" placeholder="to-dos">
                    <span onclick="newElement()" class="addBtn">Add</span>
                  </div>
                  <br>
                  <ul class="myUL">
                  </ul>
            </div></th>
      <tr>
</table>
<table>
        <th class="day-header">tuesday</th>
        <th>♡︎</th>
      </tr>
        <th>  <div>
        <div class="planner">
            <div class="todoheader">
                <input type="text" class="todo-input" placeholder="scheduled events">
                <span onclick="newElement()" class="addBtn">Add</span>
              </div>
              <br>
              <ul class="myUL">
              </ul>
        </div></th>
      <th> <div class="planner">
                <div class="todoheader">
                    <input type="text" class="todo-input" placeholder="to-dos">
                    <span onclick="newElement()" class="addBtn">Add</span>
                  </div>
                  <br>
                  <ul class="myUL">
                  </ul>
            </div></th>
    </tr>
</table>
<table>
    <tr>
        <th class="day-header">wednesday</th>
        <th>♡︎</th>
    </tr>
    <tr>
      <th>  <div>
            <div class="planner">
                <div class="todoheader">
                    <input type="text" class="todo-input" placeholder="scheduled events">
                    <span onclick="newElement()" class="addBtn">Add</span>
                  </div>
                  <br>
                  <ul class="myUL">
                  </ul>
            </div></th>
      <th> <div class="planner">
                <div class="todoheader">
                    <input type="text" class="todo-input" placeholder="to-dos">
                    <span onclick="newElement()" class="addBtn">Add</span>
                  </div>
                  <br>
                  <ul class="myUL">
                  </ul>
            </div></th>
      <tr>
</table>
<table>
        <th class="day-header">thursday</th>
        <th>♡︎</th>
      </tr>
        <th>  <div>
        <div class="planner">
            <div class="todoheader">
                <input type="text" class="todo-input" placeholder="scheduled events">
                <span onclick="newElement()" class="addBtn">Add</span>
              </div>
              <br>
              <ul class="myUL">
              </ul>
        </div></th>
      <th> <div class="planner">
                <div class="todoheader">
                    <input type="text" class="todo-input" placeholder="to-dos">
                    <span onclick="newElement()" class="addBtn">Add</span>
                  </div>
                  <br>
                  <ul class="myUL">
                  </ul>
            </div></th>
    </tr>
</table>
<table>
    <tr>
        <th class="day-header">friday</th>
        <th>♡︎</th>
    </tr>
    <tr>
      <th>  <div>
            <div class="planner">
                <div class="todoheader">
                    <input type="text" class="todo-input" placeholder="scheduled events">
                    <span onclick="newElement()" class="addBtn">Add</span>
                  </div>
                  <br>
                  <ul class="myUL">
                  </ul>
            </div></th>
      <th> <div class="planner">
                <div class="todoheader">
                    <input type="text" class="todo-input" placeholder="to-dos">
                    <span onclick="newElement()" class="addBtn">Add</span>
                  </div>
                  <br>
                  <ul class="myUL">
                  </ul>
            </div></th>
            <tr>
</table>
<table>
        <th class="day-header">saturday</th>
        <th>♡︎</th>
    </tr>
    <tr>
      <th>  <div>
            <div class="planner">
                <div class="todoheader">
                    <input type="text" class="todo-input" placeholder="scheduled events">
                    <span onclick="newElement()" class="addBtn">Add</span>
                  </div>
                  <br>
                  <ul class="myUL">
                  </ul>
            </div></th>
      <th> <div class="planner">
                <div class="todoheader">
                    <input type="text" class="todo-input" placeholder="to-dos">
                    <span onclick="newElement()" class="addBtn">Add</span>
                  </div>
                  <br>
                  <ul class="myUL">
                  </ul>
            </div></th>
            <tr>
</table>
<table>
        <th class="day-header">sunday</th>
        <th>♡︎</th>
    </tr>
    <tr>
      <th>  <div>
            <div class="planner">
                <div class="todoheader">
                    <input type="text" class="todo-input" placeholder="scheduled events">
                    <span onclick="newElement()" class="addBtn">Add</span>
                  </div>
                  <br>
                  <ul class="myUL">
                  </ul>
            </div></th>
      <th> <div class="planner">
                <div class="todoheader">
                    <input type="text" class="todo-input" placeholder="to-dos">
                    <span onclick="newElement()" class="addBtn">Add</span>
                  </div>
                  <br>
                  <ul class="myUL">
                  </ul>
            </div></th>
</table>
</article>



<script src="../js/todo.js"></script>
</section>



</body>
</html>