        <!-- jQuery -->
        <script src="../js/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="../js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="../js/metisMenu.min.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="../js/startmin.js"></script>

        <!-- DataTables JavaScript -->
        <script src="../js/dataTables/jquery.dataTables.min.js"></script>
        <script src="../js/dataTables/dataTables.bootstrap.min.js"></script>


        <!-- Custom Javascript -->

        <script>
             //Alert Timer 

             setTimeout (function(){
                    //closing the alert
                    $('.alert').alert('close');
                }, 4000);


                $(document).ready(function() {
                $('#dataTables-example').DataTable({
                        responsive: false
                });
            });

        </script>

    </body>
</html>