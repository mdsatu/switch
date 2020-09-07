<style>
/* Switch Style */
.switch {
    position: relative;
    display: inline-block;
    width: 50px;
    height: 26px;
}

.switch input {
    opacity: 0;
    width: 0;
    height: 0;
}

.slider {
    position: absolute;
    cursor: pointer;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: #ccc;
    -webkit-transition: .4s;
    transition: .4s;
}

.slider:before {
    position: absolute;
    content: "";
    height: 20px;
    width: 20px;
    left: 2px;
    bottom: 3px;
    background-color: white;
    -webkit-transition: .4s;
    transition: .4s;
}

input:checked + .slider {
    background-color: #258391;
}

input:focus + .slider {
    box-shadow: 0 0 1px #258391;
}

input:checked + .slider:before {
    -webkit-transform: translateX(26px);
    -ms-transform: translateX(26px);
    transform: translateX(26px);
}
.table thead th {
    border: 0;
    border-right: 1px solid #ddd;
}

/* Rounded sliders */
.slider.round {
    border-radius: 34px;
}

.slider.round:before {
    border-radius: 50%;
}
/* End Switch Style */
</style>

<script>
    // Change Switch
    function changeSwitch(table, column, id){
        $('.loader').show();

        $.ajax({
            url: "/",
            method: 'POST',
            data: {
                _token: "{{csrf_token()}}",
                table,
                column,
                id
            },
            success: function(){
                $('.loader').hide();
                // alert('Changed successfully.');
            },
            error: function(){
                $('.loader').hide();
                alert('Something wrong!');
            },
        });
    }
</script>
