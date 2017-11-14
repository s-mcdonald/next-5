
<script
      src="https://code.jquery.com/jquery-3.2.1.min.js"
      integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
      crossorigin="anonymous"></script>
  
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


<script type="text/javascript">

    $(document).ready(function() {

        /**
         * Checks the race view page
         */
        function checkLocal() {
            let x = $("#timer").html();
            let y = $('#race-div').attr('data-time');
            if(x > y) {
                $('#race-div').html('Race started at:' +  y + ', you can no longer access this page.');
            }          
        }


        /**
         * @todo Even if there is no new data the html is still
         *       being updated. this can be fixed to reduce UI change.
         *       However not required for this task.
         *       
         */
        function checkListing() {

            let ul = $('#race');

            // let li_first = $('li').first(); 
            // let li_last = $('li').last(); 

            // 
            // 1. Get an array of all id's
            // 
            var list_data = $("li").map(function() {
                                return $(this).attr('data-id');
                            }).get().join();


            // 
            // Check the log, good data will look
            // like this. 
            // 
            // : 11,14,17,24,25
            // : 14,17,24,25,26
            // : 17,24,25,26,27
            // 
            console.log(list_data);

            // if there is no valid li
            // no api call will be made.
            $("li").each(function( index ) {

                var data_action = $(this).attr('data-action');

                // Get the li item
                var li_id = $(this).attr('data-id');

                // Buld senddata
                var senddata = {
                    _token: "{{ csrf_token() }}",
                    id:li_id,
                    action:data_action
                };

                //  Send request
                $.ajax({
                    url: "/api/nextFive",
                    type: 'post',
                    dataType: 'json',
                    data: senddata,
                    success: function (data) {
                        if(data.status == 'update') {
                            console.log('payload updated');
                            ul.html(data.payload);
                        }
                    },
                    error: function () {
                        //
                        console.log('ajax call error');
                    }
                });
            });
        }


        /**
         * 1. Main update function
         * 2. Updates the time on the page
         */
        function update() {

            // Which page are we on ?
            if($('#page').attr('data-value') === 'race')
                checkLocal();
            else
                checkListing();

            window.setTimeout(update, 2000);
        
        }

        /**
         * Allow the server time to be updated every 1000 ms
         * 
         */
        function updateTime() {
         
            $.get( "/api/timer", function( data ) {
                $("#timer").html(data);
            })
            .fail(function() {
                $("#timer").html('failed connecting to server.'); 
            })
            .always(function() {
                window.setTimeout(updateTime, 1000);
            });  
        }

        update();
        updateTime();
    });
</script>