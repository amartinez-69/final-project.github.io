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
        <li class="navbar"><a href="folders.html">folders</a></li>
        <li class="navbar"><a href="habitTracker.html">habit tracker</a></li>
    </ul>
</nav>


<article>
<table>
    <tr>
        <th>monday</th>
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
        <th>tuesday</th>
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
        <th>wednesday</th>
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
        <th>thursday</th>
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
        <th>friday</th>
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
        <th>saturday</th>
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
        <th>sunday</th>
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

<!-- <article>
    <p> test </p>
    <div class="notebook" style="float: left; width: 50%;">
        <h2>monday</h2>
        <div>
            <div class="planner" style="float: left; width: 50%;">
                <div class="todoheader">
                    <input type="text" class="todo-input" placeholder="scheduled events">
                    <span onclick="newElement()" class="addBtn">Add</span>
                  </div>
                  <br>
                  <ul class="myUL">
                    <li class="todo">Hit the gym</li>
                    <li class="todo">Pay bills</li>
                  </ul>
            </div>

            <div class="planner" style="float: right; width: 50%;">
                <div class="todoheader">
                    <input type="text" class="todo-input" placeholder="to dos for today">
                    <span onclick="newElement()" class="addBtn">Add</span>
                  </div>
                  <br>
                  <ul class="myUL">
                    <li class="todo">Hit the gym</li>
                  </ul>
            </div>
            </div>
        </div>

        <h2>tuesday</h2>
        <div>
            <div class="planner" style="float: left; width: 50%;">
                <div class="todoheader">
                    <input type="text" class="todo-input" placeholder="scheduled events">
                    <span onclick="newElement()" class="addBtn">Add</span>
                  </div>
                  <br>
                  <ul class="myUL">
                    <li class="todo">Hit the gym</li>
                    <li class="todo">Pay bills</li>
                  </ul>
            </div>

            <div class="planner" style="float: right; width: 50%;">
                <div class="todoheader">
                    <input type="text" class="todo-input" placeholder="to dos for today">
                    <span onclick="newElement()" class="addBtn">Add</span>
                  </div>
                  <br>
                  <ul class="myUL">
                  </ul>
            </div>
        </div>

        </div>
        <h2>wednesday</h2>
        <div>
            <div class="planner" style="float: left; width: 50%;">
                <div class="todoheader">
                    <input type="text" class="todo-input" placeholder="scheduled events">
                    <span onclick="newElement()" class="addBtn">Add</span>
                  </div>
                  <br>
                  <ul class="myUL">
                    <li class="todo">Wozq board meeting</li>
                    <li class="todo">Pay bills</li>
                  </ul>
            </div>
            <div class="planner" style="float: right; width: 50%;">
                <div id="myDIV" class="todoheader">
                    <input type="text" class="todo-input" placeholder="to dos for today">
                    <span onclick="newElement()" class="addBtn">Add</span>
                  </div>
                  <br>
                  <ul class="myUL">
                    <li class="todo">send email</li>
                  </ul>
            </div>
            </div>
        </div>
        <h2>thursday</h2>
        <div>
            <div class="planner" style="float: left; width: 50%;">
                <div class="todoheader">
                    <input type="text" class="todo-input" placeholder="scheduled events">
                    <span onclick="newElement()" class="addBtn">Add</span>
                  </div>
                  <br>
                  <ul class="myUL">
                    <li class="todo">Hit the gym</li>
                    <li class="todo">Pay bills</li>
                  </ul>
            </div>
            <div class="planner" style="float: right; width: 50%;">
                <div class="todoheader">
                    <input type="text" class="todo-input" placeholder="to dos for today">
                    <span onclick="newElement()" class="addBtn">Add</span>
                  </div>
                  <br>
                  <ul class="myUL">
                  </ul>
            </div>
            </div>
        </div>

    </div>
    <div class="notebook" style="float: left; width: 50%;">
        <h2>friday</h2>
        <div>
            <div class="planner" style="float: left; width: 50%;">
                <div class="todoheader">
                    <input type="text" class="todo-input" placeholder="scheduled events">
                    <span onclick="newElement()" class="addBtn">Add</span>
                  </div>
                  <br>
                  <ul class="myUL">
                    <li class="todo">Hit the gym</li>
                    <li class="todo">Pay bills</li>
                  </ul>
            </div>
            <div class="planner" style="float: right; width: 50%;">
                <div class="todoheader">
                    <input type="text" class="todo-input" placeholder="to dos for today">
                    <span onclick="newElement()" class="addBtn">Add</span>
                  </div>
                  <br>
                  <ul class="myUL">
                  </ul>
            </div>
            </div>
        </div>
        <h2>saturday</h2>
        <div>
            <div class="planner" style="float: left; width: 50%; height: 100px;">
                <div class="todoheader">
                    <input type="text" class="todo-input" placeholder="scheduled events">
                    <span onclick="newElement()" class="addBtn">Add</span>
                  </div>
                  <br>
                  <ul class="myUL">
                    <li class="todo">Hit the gym</li>
                    <li class="todo">Pay bills</li>
                  </ul>
            </div>
            <div class="planner" style="float: right; width: 50%; height: 100px;">
                <div class="todoheader">
                    <input type="text" class="todo-input" placeholder="to dos for today">
                    <span onclick="newElement()" class="addBtn">Add</span>
                  </div>
                  <br>
                  <ul class="myUL">
                  </ul>
            </div>
            </div>
        </div>
        <h2>sunday</h2>
        <div>
            <div class="planner" style="float: left; width: 50%; height: 100px;">
                <div class="todoheader">
                    <input type="text" class="todo-input" placeholder="scheduled events">
                    <span onclick="newElement()" class="addBtn">Add</span>
                  </div>
                  <br>
                  <ul class="myUL">
                    <li class="todo">Hit the gym</li>
                    <li class="todo">Pay bills</li>
                  </ul>
            </div>
            <div class="planner" style="float: right; width: 50%; height: 100px;">
                <div class="todoheader">
                    <input type="text" class="todo-input" placeholder="to dos for today">
                    <span onclick="newElement()" class="addBtn">Add</span>
                  </div>
                  <br>
                  <ul class="myUL">
                  </ul>
            </div>
            </div>
        </div>
    </div>
</article> -->

<script src="../js/todo.js"></script>
</section>



</body>
</html>