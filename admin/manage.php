<?php
include('partial/menu.php');
?>


    <!---main content section start--->
    <div class="main-content">
       
        <div class="wrapper">
        <h1> <strong>
        Manage Admin
    </strong>
        </h1>
        <br>
        <br>
<!--button to add admin-->
<a href="add-admin.php" class="btn-primary">Add Admin</a>
<br>
<br>
<br>
<!---make table--->
        <div class="tbl-full">
        <table class="table" >
          <tr>
               <th>S.N</th>
               <th>Full Name</th>
               <th>UserName</th>
               <th>Actions</th>
          </tr>
<!---make row 1--->
          <tr>
               <td>1.</td>
               <td>Shahriar ovi</td>
               <td>Shahriar </td>
               <td>
                    <a href="#"class="btn-secondary" >update Admin</a>
                   <a href="" class="btn-danger" > Delete Admin</a>
                  </td>
          </tr>
<!---make row 2--->
          <tr>
               <td>2.</td>
               <td>Shahriar ovi</td>
               <td>Shahriar </td>
               <td>
               <a href="#"class="btn-secondary" >update Admin</a>
                   <a href="" class="btn-danger" > Delete Admin</a>
                  </td>
          </tr>
<!---make row 3--->       
      <tr>
               <td>3.</td>
               <td>Shahriar ovi</td>
               <td>Shahriar </td>
               <td>
               <a href="#"class="btn-secondary" >update Admin</a>
                   <a href="" class="btn-danger" > Delete Admin</a>
                  </td>
          </tr>
<!---make row 4--->
             <tr>
               <td>4.</td>
               <td>Shahriar ovi</td>
               <td>Shahriar </td>
               <td>
               <a href="#"class="btn-secondary" >update Admin</a>
                   <a href="" class="btn-danger" > Delete Admin</a>
                  </td>
          </tr>
        </table>
        </div>
       
     <div class="clearfix"></div>
        </div>
    </div>
    <!---main content section ends--->

    <?php 
    include('partial/footer.php')
    ?>
</body>

</html>