<?php

interface DbHanndler{
    public function connect();
    public function get_all_records_paginated($fields = array(), $start);
    public function get_record_by_id($id,$primary_key="id");
}