<html>
<head>
  <title>Vue QR-Code Reader DEMO</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.16/vue.js"></script>

  <script src="https://unpkg.com/vue-qrcode-reader@1.3.1/dist/vue-qrcode-reader.browser.js"></script> -->

  <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.16/vue.js"></script>

  <script src="https://unpkg.com/vue-qrcode-reader@1.3.1/dist/vue-qrcode-reader.browser.js"></script>


  <link rel="stylesheet" href="https://unpkg.com/vue-qrcode-reader@1.3.1/dist/vue-qrcode-reader.css">
  <style>
  p {
  padding: 20px;
}

.error {
  color: red;
  font-weight: bold;
}
  </style>
</head>

<body>
  <div id="app">
    <p>
      Last result: <input type="text" value="" v-model="decodedContent" />
    </p>
    
    <p class="error">
      {{ errorMessage }}
    </p>
  
    <qrcode-stream @decode="onDecode" @init="onInit"></qrcode-stream>
  </div>
  
<script>
Vue.use(VueQrcodeReader)

new Vue({
  el: '#app',

  data () {
    return {
      decodedContent: '',
      errorMessage: ''
    }
  },

  methods: {
    onDecode (content) {
      this.decodedContent = content
    },

    onInit (promise) {
      promise.then(() => {
        console.log('Successfully initilized! Ready for scanning now!')
      })
      .catch(error => {
        if (error.name === 'NotAllowedError') {
          this.errorMessage = 'Hey! I need access to your camera'
        } else if (error.name === 'NotFoundError') {
          this.errorMessage = 'Do you even have a camera on your device?'
        } else if (error.name === 'NotSupportedError') {
          this.errorMessage = 'Seems like this page is served in non-secure context (HTTPS, localhost or file://)'
        } else if (error.name === 'NotReadableError') {
          this.errorMessage = 'Couldn\'t access your camera. Is it already in use?'
        } else if (error.name === 'OverconstrainedError') {
          this.errorMessage = 'Constraints don\'t match any installed camera. Did you asked for the front camera although there is none?'
        } else {
          this.errorMessage = 'UNKNOWN ERROR: ' + error.message
        }
      })
    }
  }
})
</script>  	
</body>
</html>

<?php 
//UPDATE `tbl_vehicle_master` SET `fld_isdeleted`='1' WHERE `fld_cust_id` = '50' and `fld_vehicle_no` = '000000DRUM' and `fld_vid` != '439'

?>