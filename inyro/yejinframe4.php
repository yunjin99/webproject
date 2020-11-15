<!DOCTYPE html>
<html>
  <head>
<meta charset="utf-8">
<style media="screen">
  table{
    border-collapse:collapse;
  }
  td,th{
    text-align:center;
    padding:10px;
    height:20px;
    width:200px;
  }
  thead{
    background:darkgray;
  }
  td{
    border-bottom:1px solid gray
  }
</style>
  </head>
  <body>
    <table>
      <tbody>
        <tr>
          <td><img style="height:300px"></td>
        </tr>
        <?php
            include("./dbconn_pyj.php");
            $jb_sql = "SELECT * FROM post where post_category_id=4";
            $jb_result = mysqli_query( $conn, $jb_sql );
            while( $row = mysqli_fetch_array( $jb_result ) ) {
            ?>
            <tr>
                    <td>
                        <?php
                            echo $row["mb_id"];
                        ?>
                    </td>
                    <td>
                        <?php
                            echo "<a href='./pyj_look_post.php?index=".$row["post_title"]."'>";
                            echo $row["post_title"];
                        ?>
                    </td>
                    <td>
                        <?php
                            echo $row["post_datetime"];
                        ?>
                    </td>
                </tr>
                <?php
              }
               ?>
      </tbody>
    </table>
  </body>
</html>
