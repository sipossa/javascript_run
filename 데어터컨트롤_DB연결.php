<?php
    $host = 'localhost';
    $user = 'root';
    $pw = '1234';
    $dbName = 'TestDB';
    
    $conn = mysqli_connect($host, $user, $pw, $dbName);
        
    $sql = "SELECT * FROM members";
    $result = mysqli_query($conn, $sql);    
    $row = mysqli_fetch_array($result);

    $list_array = array("name" =>$row['name'],
                        "email" =>$row['email'],
                        "phone" => $row['phone']);

    $result_array = json_encode($list_array);
    
    echo $result_array;
    
?>


//https://streamls.tistory.com/195

import React, { Component } from 'react';
import './App.css';

class App extends Component {
  render(){
    return (
      <div className="App">
        Hello
        <input type="button" value="get data" onClick={
          function(){
            fetch('/test.php')
            .then(function(response){
              return response.json();
            })
            .then(function(json){console.log(json);})
          }.bind(this)
        }></input>
      </div>
    );
  }
}

export default App;