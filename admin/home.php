<div>
<div class="col-lg-12">
  <center>
  <h3>Announcements List</h3>
  <p>(sorted from <b>latest</b> to <b>oldest</b>)</p>
</center>
</div>
<table class="table table-bordered">
  <thead class="thead-dark">
      <th scope="col">Title</th>
      <th scope="col">Body</th>
      <th scope="col">Date and Time</th>
      <th scope="col">Location</th>
    </tr>
  </thead>
  <tbody>
  <?php 
    $mydb->setQuery("SELECT * FROM `tblblogpost` WHERE CATEGORY='ANNOUNCEMENT' ORDER BY `DATEPOSTED` DESC");
        $cur = $mydb->loadResultList();

        foreach ($cur as $result) {

     ?>
    <tr>
      <th><?php echo $result->BLOGS; ?></th>
      <th><?php echo $result->BLOG_WHAT; ?></th>
      <td><?php echo  dateFormat($result->BLOG_WHEN,"m-d-y  h:i a"); ?></td>
      <td><?php echo $result->BLOG_WHERE; ?></td>
    </tr>
  <?php } ?>
  </tbody>
</table>
</div>

<div>
<div class="col-lg-12">
  <br>
  <center>
  <h3>Events List</h3> 
</center>
</div>
<table class="table table-bordered">
  <thead class="thead-dark">
      <th scope="col">Title</th>
      <th scope="col">Body</th>
      <th scope="col">Date and Time</th>
      <th scope="col">Location</th>
    </tr>
  </thead>
  <tbody>
  <?php 
    $mydb->setQuery("SELECT * FROM `tblblogpost` WHERE CATEGORY='EVENT' ORDER BY `DATEPOSTED` DESC");
        $cur = $mydb->loadResultList();

        foreach ($cur as $result) {

     ?>
    <tr>
      <th><?php echo $result->BLOGS; ?></th>
      <th><?php echo $result->BLOG_WHAT; ?></th>
      <td><?php echo  dateFormat($result->BLOG_WHEN,"m-d-y  h:i a"); ?></td>
      <td><?php echo $result->BLOG_WHERE; ?></td>
    </tr>
  <?php } ?>
  </tbody>
</table>
</div>