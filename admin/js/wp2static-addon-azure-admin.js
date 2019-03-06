(function( $ ) {
	'use strict';

	/**
	 * All of the code for your admin-facing JavaScript source
	 * should reside in this file.
	 *
	 * Note: It has been assumed you will write jQuery code here, so the
	 * $ function reference has been prepared for usage within the scope
	 * of this function.
	 *
	 * This enables you to define handlers, for when the DOM is ready:
	 *
	 * $(function() {
	 *
	 * });
	 *
	 * When the window is loaded:
	 *
	 * $( window ).load(function() {
	 *
	 * });
	 *
	 * ...and/or other possibilities.
	 *
	 * Ideally, it is not considered best practise to attach more than a
	 * single DOM-ready or window-load handler for a particular page.
	 * Although scripts in the WordPress core, Plugins and Themes may be
	 * practising this, we should strive to set a better example in our own work.
   */

	$(function() {
    deploy_options['azure'] = {
      exportSteps: [
          'azure_prepare_export',
          'azure_upload_files',
          'finalize_deployment'
      ],
      required_fields: {
        azStorageAccountName: 'Please specify your Storage Account Name in order to deploy to Azure.',
        azContainerName: 'Please specify your Container Name in order to deploy to Azure.',
        azAccessKey: 'Please specify your Access Key for this Storage/Container.'
      }
    };

    status_descriptions['azure_prepare_export'] = 'Preparing to deploy to Microsoft Azure Storage';
    status_descriptions['azure_upload_files'] = 'Uploading files to Microsoft Azure Storage';

  }); // end DOM ready

})( jQuery );
