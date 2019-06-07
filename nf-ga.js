var myGoogleAnalyticsController = Marionette.Object.extend( {

    initialize: function() {
        console.log( 'init' );
        this.listenTo( Backbone.Radio.channel( 'forms' ), 'submit:response', this.submitResponse );
    },

    submitResponse: function( response ) {

        if( 'error' == response ) return;

        this.triggerEvent( response.data.settings.title );
    },

    triggerEvent: function( formTitle ) {
        console.log( 'trigger' );
        try {
            gtag('event', 'submit', {
                'event_category': 'form',
                'event_label': formTitle
            });
        } catch ( err ) {
            console.log( err );
        }
    }

});

jQuery( document ).ready( function() {
    new myGoogleAnalyticsController();
});
