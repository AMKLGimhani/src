<footer>
    <div class="row">
            <div class="col-md-3">&copy; Hamk University</div>
            <div class="col-md-6">
            <?php
       
                $filename = basename($_SERVER['PHP_SELF']);
                $modified_time = date("F d Y H:i:s.", filemtime($filename));
                echo $filename . " was last modified: " . $modified_time;

            ?> 
            </div>
            <div class="col-md-3">Hämeenlinna</div>
    </div>

    
</footer>

          

    </div> <!-- container -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    
</body>
</html>