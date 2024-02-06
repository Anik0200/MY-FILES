        $(document).on('click', '.pagination a', function(e) {
            e.preventDefault();

            let page = $(this).attr('href').split('page=')[1];

            $.ajax({
                url: "paginate-data?page=" + page,
                success: function(response) {
                    $('.table-data').html(response);
                }
            });
        });