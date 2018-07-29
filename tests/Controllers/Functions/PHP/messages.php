<?php
    function alert($string) {
        echo "<div class='alert alert-danger alert-dismissible fade show'style='background:#f83600;text-align:center;margin-left:360px;max-height:80px;font-size:13px;width:180px;color:#FFFFFF;border:0.5px solid #decba4'>
        ".$string."<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
        <span aria-hidden='true'>&times;</span>
      </button></div>";
    }
    function success($string) {
        echo "<div class='alert alert-success alert-dismissible fade show' style='margin-left:370px;width:180px;max-height:80px;color:#333333'>".$string."
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true'>&times;</span>
  </button></div>";
    }
?>