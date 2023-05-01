var kuza_slider_file_frame;

jQuery(function($){
      // Uploads

      jQuery(document).on('click', 'input.select-img', function( event ){

        var $this = $(this);
        
        event.preventDefault();

        var Kuza_Slider_Image = wp.media.controller.Library.extend({
            defaults :  _.defaults({
                    id:        'author-info-insert-image',
                    title:      $this.data( 'uploader_title' ),
                    allowLocalEdits: false,
                    displaySettings: true,
                    displayUserSettings: false,
                    multiple : false,
                    library: wp.media.query( { type: 'image' } )
              }, wp.media.controller.Library.prototype.defaults )
        });

        // Create the media frame.
        kuza_slider_file_frame = wp.media.frames.kuza_slider_file_frame = wp.media({
          button: {
            text: jQuery( this ).data( 'uploader_button_text' ),
          },
          state : 'author-info-insert-image',
              states : [
                  new Kuza_Slider_Image()
              ],
          multiple: false  // Set to true to allow multiple files to be selected
        });

        // When an image is selected, run a callback.
        kuza_slider_file_frame.on( 'select', function() {

          var state = kuza_slider_file_frame.state('author-info-insert-image');
          var selection = state.get('selection');
          var display = state.display( selection.first() ).toJSON();
          var obj_attachment = selection.first().toJSON();
          display = wp.media.string.props( display, obj_attachment );

          var image_field = $this.siblings('.img');
          var imgurl = display.src;

          // Copy image URL
          image_field.val(imgurl);

        });

        // Finally, open the modal
        kuza_slider_file_frame.open();
      });
});