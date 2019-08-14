var MgNewsletterguru = {

    cookieLiveTime: 1,

    cookieName: 'newsletterguru',

    baseUrl: '',

    setCookieLiveTime: function(value)
    {
        this.cookieLiveTime = value;
    },

    setCookieName: function(value)
    {
        this.cookieName = cookieName;
    },

    setBaseUrl: function(url)
    {
        this.baseUrl = url;
    },

    getBaseUrl: function(url)
    {
        return this.baseUrl;
    },

    createCookie: function() {
         

        var days = this.cookieLiveTime;
       //  alert(days);
         //    val = '<?php echo Mage::getStoreConfig(newsletter/general/cookielifetime); ?>';
            //    alert(val);
         if(val==''){ val = 1;
		
	 }
        var value = 1;
        var name = this.cookieName;
        if (days) {
            var date = new Date();
            date.setTime(date.getTime()+(val*60*1000));
            var expires = "; expires="+date.toGMTString();
        }
        else var expires = "";
        document.cookie = escape(name)+"="+escape(value)+expires+"; path=/";
    },

    readCookie: function(name) {
        var name = this.cookieName;
        var nameEQ = escape(name) + "=";
        var ca = document.cookie.split(';');
        for(var i=0;i < ca.length;i++) {
            var c = ca[i];
            while (c.charAt(0)==' ') c = c.substring(1,c.length);
            if (c.indexOf(nameEQ) == 0) return unescape(c.substring(nameEQ.length,c.length));
        }
        return null;
    },

    boxClose: function()
    {
        jQuery('#mgnlg_background_layer').fadeOut();
    },

    boxOpen: function()
    {
        jQuery('#mgnlg_background_layer').fadeIn();
    }
};

jQuery(function() {
    if (MgNewsletterguru.readCookie() != 1) {
        MgNewsletterguru.createCookie();
        MgNewsletterguru.boxOpen();
    }
    jQuery('#mgnlg_background_layer').css('height', jQuery(document).height()+'px');
    jQuery('#mgnlg_box_layer').css('margin-top', ((jQuery(window).height()-jQuery('#mgnlg_box_layer').height()) /2)+'px');
    jQuery('#mgnlg_submit').click(function(){
        var email = jQuery('#mgnlg_email').val();
        jQuery.post(MgNewsletterguru.getBaseUrl()+'index.php/newsletter/subscriber/newajax/', {'email':email}, function(resp) {
            if (resp.errorMsg) {
                jQuery('#mgnlg_box_subscribe_response_error').html(resp.errorMsg);
            } else {
                jQuery('#mgnlg_box_subscribe_response_error').html('');
                jQuery('#mgnlg_box_subscribe_response_success').html(resp.successMsg);
                jQuery('#mgnlg_box_subscribe_form').css('display','none');
                jQuery('#mgnlg_box_subscribe_response_success').css('display','block');
                setTimeout('MgNewsletterguru.boxClose()', 5000)
            }
        });
    });
    jQuery('#mgnlg_box_close').click(function(){
        MgNewsletterguru.boxClose();
    });
});

jQuery.noConflict();
