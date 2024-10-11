<!-- classes are as they should but the other elements are just place holders especially the one in the ul -->
<nav class="navbar-norm">
 <ul>
  <li><a href="./../index.php">Home</a></li>
  <li><a href="./../pages/skillsProject.php">Projects</a></li>
  <li><a href="./../pages/about.php">About</a></li>
 </ul>
    <script>
        $( function()
        {
            $( '#nav li:has(ul)' ).doubleTapToGo();
        });
    </script>
</nav>