


    <style>
        .content class{
            font-family: sans sarif;
        }
        .content{
            margin: 5px;
        }
         form input[type="text"],input[type="password"] {
            width: 35%;
            margin:3px;
            display:block;
            font-size:15px; 
        }
        label{
            margin-left:2px;
            font-size: 15px;
        }
        select{
            width: 20%;
        }
        .search{
            float:right;
            margin-top: 3px;
           
        }
        .search input[type="text"]{
            width:60%;
        }
        .manage_student {
            text-align: center;
        }
        table{
            border-collapse: collapse;
            width:90%;
            font-size:15px;
        }
        table, th{
            border: 1px solid black;
            margin: 5px;
        }
        th, td{
            padding: 5px;
        }     
    </style>

<div class="content students">
<div class="content">
        <div class="search">
            <label for="search">Search</label>
            <input type="text" placeholder="Search">
            </div>
            <form action="" method="post">
                <label for="UserName">UserName </label>
                <input type="text" name="userName" placeholder="Enter username">
                <label for="fullName">Fullname </label>
                <input type="text" name="fullName" placeholder="Enter Fullname">
                <label for="Email">Email</label>
                <input type="text" name="Email" placeholder="Enter email">
                <label for="classCode">Class Code:</label>
                    <select name="" id="">
                        <option value="">Opt1</option>
                        <option value="">Opt2</option>
                    </select><br>
                    <label for="password">Password</label>
                <input type="password" placeholder="Enter password">
                <label for="confirm psaaword">Confirm password</label>
                <input type="password" placeholder="Confirm password">
                <input type="submit" name="add" value="ADD">
            </form>
            <div class="manage_student">
            <h2>MANAGE STUDENTS</h2>
            <table>
                <tr>
                    <th>Full Name</th>
                    <th>User Name</th>
                    <th>Class Code</th>
                    <th>Action</th>
                </tr>  
                <tr>
                    <td><?php echo ""; ?></td>
                    <td><?php echo ""; ?></td>
                    <td><?php echo ""; ?></td>
                    <td>
                        <a href="#=<?php echo ""; ?>">View</a> | 
                        <a href="#=<?php echo ""; ?>">Update</a> | 
                        <a href="#=<?php echo ""; ?>">Delete</a>
                    </td>
                </tr>
            </table>
        </div>
    </div> 
</div>