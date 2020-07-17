<?php
$xhtml = '';

if (!empty($this->items)) {
    $i = 0;
    foreach ($this->items as $item) {
        $row = ($i % 2 == 0) ? 'even' : 'odd';
        $id = $item['id'];
        $status = ($item['status'] == 0) ? 'Inactive' : 'Active';
        $xhtml .= '<div class="row ' . $row . '" id="item-' . $id . '">
								<p class="w-10"><input id="checkdata" type="checkbox" name="checkbox[]" value="' . $id . '"></p>
								<p class="w-10">' . $item['name'] . '</p>
								<p class="w-10">' . $item['id'] . '</p>
								<p class="w-10">' . $status . ' </p>
								<p class="w-10">' . $item['ordering'] . '</p>
								<p class="w-10">' . $item['total'] . '</p>
								<p class="w-10">
									<a href="form.php?action=edit&id=' . $id . '">Edit</a> |
									<a href="javascript:deleteItem(' . $id . ')">Delete</a>
								</p>
				
				</div>';
        $i++;
    }
} else {
    $xhtml .= '<div class="error">Dữ liệu đang cập nhật!</div>';
}
$html_checkInput = '<div class="check_all_last"><p class="child"><input type="checkbox" id="check_all_last"><span>Check all</span></p></div>';

?>

<div class="content">
    <h3>Group : List</h3>

    <div class="list">
        <div class="row head">
            <p class="w-10 ">
                <input type="checkbox" name="check_all_first" id="check_all_first" />
            </p>
            <p class="w-10">Group Name</p>
            <p class="w-10">ID</p>
            <p class="w-10">Status </p>
            <p class="w-10">Ordering</p>
            <p class="w-10">Member</p>
            <p class="w-10 action">Action</p>
        </div>
        <?php
        echo $xhtml;
        ?>
    </div>
    <?php
    echo $html_checkInput;

    ?>

</div>
<?php include_once(VIEW_PATH . 'footer.php'); ?>