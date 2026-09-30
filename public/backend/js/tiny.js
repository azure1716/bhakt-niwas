
     // TinyMCE
    initTinyMCE();
    function initTinyMCE() {
        tinymce.init({
            selector: '.text_editor',
            height: 400,
            plugins: 'advlist autolink lists link image charmap print preview anchor table',
            toolbar: 'undo redo | formatselect | bold italic | alignleft aligncenter alignright | bullist numlist outdent indent | removeformat | image link table',
            setup: function(editor) {
                editor.on('change', function() {
                    editor.save();
                });
            }
        });
    }