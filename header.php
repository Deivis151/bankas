<?php
function setBody() {
    echo '<div class="main-container">';
}

function finishBody() {
    echo '</div>';
}

function setHeader() {
    echo '<div class="header">';
    echo '<div><img class="image" src="foto/bank.jpg" alt="bank"></div>';
    echo '<div class="header-text">';
    echo '<h2>Swedbank</h2>';
    echo '</div>';
    echo '<div><img class="image" src="foto/money.jpg" alt="money"></div>';
    echo '</div>';
}

function setFooter() {
    echo '<div class="footer">';
    echo '<div>Konstitucijos pr. 20A, 03502 Vilnius, Lietuva</div>';
    echo '<div></div>';
    echo '</div>';
}

function setMenu(
    bool $link_to_list = false,
    bool $link_to_new = false
) {
    echo '<div class="menu">';
    echo '<a href="./index.php?logout" class="menu-item">LOGOUT</a>';
    if ($link_to_list) {
        echo '<a href="./list.php" class="menu-item">Account List</a>';
    }
    if ($link_to_new) {
        echo '<a href="./new.php" class="menu-item">Create New Account</a>';
    }
    echo '</div>';
}

function successMessage(string $message = '') {
    echo '<div class="success message">' . $message . '</div>';
}

function failureMessage(string $message = '') {
    echo '<div class="failure message">' . $message . '</div>';
}
?>