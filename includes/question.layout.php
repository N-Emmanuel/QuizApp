
    <style>
        .content class{
            font-family: sans sarif;
        }
        .content{
            margin: 5px;
        }
         form input[type="text"]{
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
        .manage_question{
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

<div class="content questions">
<div class="content">
        <div class="search">
            <label for="search">Search</label>
            <input type="text" placeholder="Search">
            </div>
            <form action="" method="post">
                <label for="courseCode">course Code:</label>
                <input type="text" name="courseCode" placeholder="Enter Course Code">
                <label for="question_type">Question Type:</label>
                <select name="" id="">
                        <option value="">True/False</option>
                        <option value="">Multiple Choice</option>
                        <option value="">Fill In</option>
                    </select><br>
                <input type="submit" name="add" value="ADD">
            </form>
            <div class="manage_question">
            <h2>MANAGE QUESTIONS</h2>
            <table>
                <tr>
                    <th>Question type</th>
                    <th>Course Code</th>
                    <th>Action</th>
                </tr>  
                <tr>
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