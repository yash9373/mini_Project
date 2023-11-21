<?php

echo '<div class="post">';
if($row['post_public'] == 'Y') {
    echo '<p class="public">';
    echo 'Public';
}else {
    echo '<p class="public">';
    echo 'Private';
}
echo '<br>';
echo '<br>';

echo '<span class="postedtime">' . $row['post_time'] . '</span>';
echo '</p>';
echo '<div>';
include 'profile_picture.php';
echo '<a class="profilelink" href="profile.php?id=' . $row['user_id'] .'">' . $row['user_firstname'] . ' ' . $row['user_lastname'] . '<a>';
echo'</div>';
echo '<br>';
echo '<p class="caption">' . $row['post_caption'] . '</p>';
echo '<center>'; 
$target = glob("data/images/posts/" . $row['post_id'] . ".*");
if($target) {
    echo '<img src="' . $target[0] . '">'; 
    echo '<br><br>';
}
echo '</center>';
echo '</div>';

?>

<style>
.post {
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
}

.post p {
    margin: 0;
}

.post .public {
    font-weight: bold;
}

.post .postedtime {
    display: block;
    font-size: 12px;
    color: #999;
    margin-bottom: 10px;
}

.post .profilelink {
    font-weight: bold;
    text-decoration: none;
    color: #333;
}

.post .caption {
    max-width: 100%;
    word-wrap: break-word;
    font-size: 14px;
}

.post img {
    max-width: 100%;
    height: auto;
}

@media only screen and (max-width: 600px) {
    .post {
        padding: 5px;
        margin-bottom: 10px;
        font-size: 12px;
    }

    .post .postedtime {
        font-size: 10px;
        margin-bottom: 5px;
    }

    .post .caption {
        font-size: 12px;
    }

    .post img {
        max-width: 100%;
        height: auto;
    }
}
</style>
