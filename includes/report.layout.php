
    <style>
        .content class{
            font-family: sans sarif;
        }
        .content{
            margin: 5px;
        }
         form input[type="text"] {
            width: 35%;
            margin:3px;
            display:block;
            font-size:15px; 
        }
       
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
        .manage_report {
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

<div class="content report">
<div class="content">
        <div class="search">
            <label for="search">Search</label>
            <input type="text" placeholder="Search">
            </div>
            
            <div class="manage_report">
            <h2>MANAGE REPORTS</h2>
            <table>
                <tr>
                    <th>Student Name</th>
                    <th>Class</th>
                    <th>Course Code</th>
                    <th>Percentage</th>
                    <th>Date Taken</th>
                    <th>Action</th>
                </tr>  
                <tr>
                    <td><?php echo ""; ?></td>
                    <td><?php echo ""; ?></td>
                    <td><?php echo ""; ?></td>
                    <td><?php echo ""; ?></td>
                    <td><?php echo ""; ?></td>
                    <td> 
                        <a href="#=<?php echo ""; ?>">Delete</a>
                    </td>
                </tr>
            </table>
            <input type="submit" name="add" value="PRINT">
        </div>
    </div>
</div>