<?php
	$Write="<?php $" . "UIDresult=''; " . "echo $" . "UIDresult;" . " ?>";
	file_put_contents('UIDContainer.php',$Write);
?>

<!DOCTYPE html>
<html lang="en">
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset="utf-8">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<script src="js/bootstrap.min.js"></script>
		<script src="https://www.gstatic.com/firebasejs/7.18.0/firebase-auth.js"></script>
		<script src="https://www.gstatic.com/firebasejs/7.18.0/firebase-storage.js"></script>
		<script src="https://www.gstatic.com/firebasejs/7.18.0/firebase-app.js"></script>
		<script src="https://www.gstatic.com/firebasejs/7.18.0/firebase-database.js"></script>
		<script src="https://www.gstatic.com/firebasejs/7.18.0/firebase-analytics.js"></script>
		
		<style>
		html {
			font-family: Arial;
			display: inline-block;
			margin: 0px auto;
			text-align: center;
		}

		ul.topnav {
			list-style-type: none;
			margin: auto;
			padding: 0;
			overflow: hidden;
			background-color: #02075d;
			width: 100%;
		}

		ul.topnav li {float: left;}

		ul.topnav li a {
			display: block;
			color: white;
			text-align: center;
			padding: 14px 16px;
			text-decoration: none;
		}

		ul.topnav li a:hover:not(.active) {background-color: #d4af37;}

		ul.topnav li a.active {background-color: #333;}

		ul.topnav li.right {float: right;}

		@media screen and (max-width: 600px) {
			ul.topnav li.right, 
			ul.topnav li {float: none;}
		}
		
		.table {
			margin: auto;
			width: 90%; 
		}
		
		thead {
			color: #02075d;
		}
		body {
  background: #f7f7f7;
}
.fluid-container {
  margin-right: 30px;
  margin-left: 30px;
}

		</style>
		
		<title>Student Data</title>
	</head>
	
	<body>
		<ul class="topnav">
		<li> <img src="sky gold LOGO 2 png.png" alt="" style="width:100px; height:50px;"></li>
			<li><a href="home.php">Home</a></li>
			<li><a class="active" href="user data.php">Student Data</a></li>
			<li><a href="registration.php">Registration</a></li>
			<li><a href="read tag.php">Read Tag ID</a></li>
			<li><a href="userdetails.php">Student Details</a></li>
      <li><a href="payment.php">Payment Information</a></li>
      <li><a href="attendance.php">Attendance</a></li>
		</ul>
		<br>
        <h1>Student Attendance</h1>

        <div class="fluid-container" style="margin-bottom: 10em;">
  <form>

  <table id="example" class="dataTable table table-hover table-striped" cellspacing="0" width="100%">
    <thead>
      <tr>
        <th>Select</th>
        <th></th>
        <th>Student Name</th>
        <th>Student ID</th>
        <th>Created Date</th>
        <th>Modified Date</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td></td>
        <td><input type="checkbox" name="Id" value="111"></td>
        <td>Ruchira</td>
        <td>BBB</td>
        <td>10/21/2016</td>
        <td>10/21/2016</td>
        <td><a class="btn btn-primary">Manage</a></td>
      </tr>
      <tr>
        <td></td>
        <td><input type="checkbox" name="Id" value="111"></td>
        <td>Pabasara</td>
        <td>BBB</td>
        <td>10/21/2016</td>
        <td>10/21/2016</td>
        <td><a class="btn btn-primary">Manage</a></td>
      </tr>
      <tr>
        <td></td>
        <td><input type="checkbox" name="Id" value="111"></td>
        <td>Deshani</td>
        <td>BBB</td>
        <td>10/21/2016</td>
        <td>10/21/2016</td>
        <td><a class="btn btn-primary">Manage</a></td>
      </tr>
      <tr>
        <td></td>
        <td><input type="checkbox" name="Id" value="111"></td>
        <td>Lewmina</td>
        <td>BBB</td>
        <td>10/21/2016</td>
        <td>10/21/2016</td>
        <td><a class="btn btn-primary">Manage</a></td>
      </tr>
      <tr>
        <td></td>
        <td><input type="checkbox" name="Id" value="111"></td>
        <td>Asha</td>
        <td>BBB</td>
        <td>10/21/2016</td>
        <td>10/21/2016</td>
        <td><a class="btn btn-primary">Manage</a></td>
      </tr>
      <tr>
        <td></td>
        <td><input type="checkbox" name="Id" value="111"></td>
        <td>Pasan</td>
        <td>BBB</td>
        <td>10/21/2016</td>
        <td>10/21/2016</td>
        <td><a class="btn btn-primary">Manage</a></td>
      </tr>
    </tbody>
    <tfoot>
      <tr>
        <td class="form-actions" colspan="7">
          <input type="submit" name="command" class="btn btn-action btn-primary disabled" disabled="disabled" value="Copy" data-loading-text="Copying..." />
          <input type="submit" name="command" class="btn btn-action btn-admin-permission disabled" data-loading-text="Archiving..." disabled="disabled" value="Archive" />
          <input type="submit" name="command" class="btn btn-action btn-admin-permission disabled" disabled="disabled" data-ui="confirm" value="Delete" />
        </td>
      </tr>
    </tfoot>
  </table>
</form>
  
  <br/>
  
  <form>
    
  <h3>Student Attendance By Class</h3>
  <hr/>
    <div class="btn-group">
    <a id="my-cases" href="#" class="action active btn btn-primary filter-btn">My Cases</a>
    <a id="all-cases" class="action btn btn-primary filter-btn" href="#">All Cases in My Institution</a>
    <a id="custom-cases" id="customized-cases" class="action btn btn-primary" data-url="/Scenario/LoadCustomCases">Customized Cases</a>
  </div>
  <table id="example2" class="dataTable table table-hover table-striped" cellspacing="0" width="100%">
    <thead>
      <tr>
        <th>Select</th>
        <th><input id="selectall" type="checkbox"></th>
        <th>Student Name</th>
        <th>Student ID</th>
        <th>Created Date</th>
        <th>Modified Date</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody id="table_body">
      
      
    </tbody>
    <tfoot>
      <tr>
        <td class="form-actions" colspan="7">
          <input type="submit" name="command" class="btn btn-action btn-primary disabled" disabled="disabled" value="Copy" data-loading-text="Copying..." />
          <input type="submit" name="command" class="btn btn-action btn-admin-permission disabled" data-loading-text="Archiving..." disabled="disabled" value="Archive" />
          <input type="submit" name="command" class="btn btn-action btn-admin-permission disabled" disabled="disabled" data-ui="confirm" value="Delete" />
        </td>
      </tr>
    </tfoot>
  </table>
  </form>
  
  <br/>
  
 
</div>

<script>
$(document).ready(function() {
  var table = $('#example').DataTable({
    paging: true,
    scrollX: true,
    pageLength: 3,
    processing: true,
    pagingType: 'full_numbers',
    lengthMenu: [
      [10, 25, 50, -1],
      [10, 25, 50, "All"]
    ],
    order: [2, "asc"],
    columns: [
      {
        name: 'user',
        visible: false,
        orderable: false
      },
      {
        name: 'instanceId',
        orderable: false
      },
      {
        name: 'name'
      },
      {
        name: 'owner'
      },
      {
        name: 'createdOn'
      },
      {
        name: 'modifiedOn'
      },
      {
        name: 'actions',
        orderable: false,
        searchable: false
      }
    ],
    
    dom: 'Blfrtip',
    buttons: [
      {
        text: 'My Cases',
        action: function(e, dt, node, config) {
        $.fn.dataTable.ext.search.push(
          function(settings, data, dataIndex) {
            return data[5] == 'dokonané'
          }
        )
        table.draw();
        $.fn.dataTable.ext.search.pop();
      }
      },
      {
        text: 'All Cases',
        action: function(e, dt, node, config) {
          table.draw();
        }
      },
      {
        text: 'Custom Cases',
        action: function(e, dt, node, config) {
          table.draw();
        }
      }
    ],
  });

  var table = $('#example2').DataTable({
    paging: true,
    scrollX: true,
    pageLength: 3,
    processing: true,
    pagingType: 'full_numbers',
    lengthMenu: [
      [10, 25, 50, -1],
      [10, 25, 50, "All"]
    ],
    order: [2, "asc"],
    columns: [
      {
        name: 'user',
        visible: false,
        orderable: false
      },
      {
        name: 'instanceId',
        orderable: false
      },
      {
        name: 'name'
      },
      {
        name: 'owner'
      },
      {
        name: 'createdOn'
      },
      {
        name: 'modifiedOn'
      },
      {
        name: 'actions',
        orderable: false,
        searchable: false
      }
    ],
    
  });
  
	// below code is used to remove all check property if user select/unselect options with name=option2 options.  
	$("#second").find('input[type="checkbox"]').click(function(){
		//$("#selectall").prop("checked", false);		
    var allChecked = $("#second").find('input[type="checkbox"]').not(':checked').length <= 0;

    $("#selectall").prop("checked", allChecked);
	});
				
	$("#selectall").click(function(){
		$("#second").find('input[type="checkbox"]').prop("checked", $("#selectall").prop("checked"))
	}) 
});

</script>	


<script src="https://www.gstatic.com/firebasejs/7.18.0/firebase.js"></script>
<script>
  // Your web app's Firebase configuration
  var firebaseConfig = {
    apiKey: "AIzaSyDkoQOcnGi1xVtf-vNDGf-ceYW31_iC0JU",
    authDomain: "ruwana-academy.firebaseapp.com",
    databaseURL: "https://ruwana-academy.firebaseio.com",
    projectId: "ruwana-academy",
    storageBucket: "ruwana-academy.appspot.com",
    messagingSenderId: "121261082835",
    appId: "1:121261082835:web:ebba2043b1762cac03ac26",
    measurementId: "G-WQEPJCKJJK"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
  firebase.analytics();
</script>
<script src="https://code.jquery.com/jquery-3.1.0.js"></script>
<script src= "attendance.js"> </script>
		
	</body>
	
</html>