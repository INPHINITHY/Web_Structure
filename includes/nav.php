<!-- classes are as they should but the other elements are just place holders especially the one in the ul -->
<nav class="navbar-norm">
 <ul>
  <li><a href="/index.php">Home</a></li>
  <li><a href="/pages/">Page 1</a></li>
  <li><a href="./pages/">Page 2</a></li>
 </ul>
    <script>
        $( function()
        {
            $( '#nav li:has(ul)' ).doubleTapToGo();
        });
    </script>
</nav>