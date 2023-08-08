
<?php include ('head.php');?>

<body>

    <div id="wrapper">

      
              <?php include ('view_banner.php');?>
       
        <div id="page-wrapper">

    <heading class="menue-select">
            <center>
                <select onchange = "page(this.value)">
                <option disabled selected>Select Candidate Group</option>
                <option value = "candidates/pres.php">Vice Chairman</option>
                <option value = "candidates/vp.php">Deputy Vice Chairman</option>
                <option value = "candidates/ua.php">General Secretary</option>
                <option value = "candidates/ss.php">Assistant General Secretary</option>
                <option value = "candidates/ea.php">Financial Secretary</option>
                <option value = "candidates/tr.php">Honourary Treasurer</option>
                <option value = "candidates/vtr.php">Social / Welfare Secretary</option>
                <option value = "candidates/sg.php">Legal Adviser</option>
                <option value = "candidates/ta.php">Publicity Secretary</option>
                </select>
            </center>

    </heading> 
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
    <?php    
        include ('footer.php');
        ?>

    <script>
    function page (src){
        window.location=src;
    }
    </script>

</body>

</html>

