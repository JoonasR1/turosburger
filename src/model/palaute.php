<?php

require_once HELPERS_DIR . 'DB.php';

function haePalaute() {
    return DB::run('SELECT id, name, feedback_text, date_time FROM feedback ORDER BY date_time asc;')->fetchAll();
  }

$palaute = haePalaute();
