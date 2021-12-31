<template class="padding-remove-x-side">
  <b-container fill-height class="padding-remove-x-side">
    <div class="d-flex  justify-content-center flex-column">
        <div class="bgimage padding-remove-x-side">
            <div class="icon-goback-chevron">
              <a href="/login">
                <b-img src="/icons/login/chevron_left_24px.svg" style="width:45px;"></b-img>
              </a>
            </div>
        </div>
        <b-row class="margin-remove-x-side mt-4">
            <b-col cols=12>
              <h5 class="default-textcolor-heading"> {{ $t('C00070')}}</h5>
              <p class="subcopy">{{ $t('HQ00006')}}</p>
            </b-col>
        </b-row> 
         <b-row class="margin-remove-x-side">
            <b-col cols=12>
              <b-form lazy-validation>
                <b-row class="mb-3">
                    <b-col cols=12> 
                      <label class="form-label form-label-mmy" for='firstname'>{{ $t('C00072')}}</label>
                        <b-form-input
                          id='firstname'
                          v-model="form.first_name"
                          type="text"
                          :rules="[rules.required]"
                          :disabled="loading"
                          :placeholder="$t('C00074')"
                          onkeypress='return (event.charCode >= 64 && event.charCode <= 122) || (event.charCode == 32)'
                          class="input-custom"
                        ></b-form-input>
                    </b-col>
                  </b-row>
                  <b-row class="mb-3">
                    <b-col cols=12> 
                        <label class="form-label form-label-mmy" for='lastname'>{{ $t('C00073')}} </label>
                        <b-form-input
                          id='lastname'
                          v-model="form.last_name"
                          type="text"
                          :rules="[rules.required]"
                          :disabled="loading"
                          :placeholder="$t('C00075')"
                          onkeypress='return (event.charCode >= 64 && event.charCode <= 122) || (event.charCode == 32)'
                          class="input-custom"
                        ></b-form-input>
                     </b-col>
                  </b-row>
                   <b-row class="mb-3">
                    <b-col cols=12>
                        <label class="form-label form-label-mmy" for='input-1'>{{ $t('HQ00026')}}</label>
                          <b-form-input
                            id='mobileno'
                            v-model="form.mobile"
                            type="text"
                            :rules="[rules.required]"
                            :disabled="loading"
                            :placeholder="$t('HQ00027')"
                            class="input-custom"
                          ></b-form-input>
                    </b-col>
                  </b-row>
                  <b-row class="mb-3">
                    <b-col cols=12>
                        <label class="form-label form-label-mmy" for='input-1'>{{ $t('C00050')}} </label>
                          <b-form-input
                            id='input-1'
                            v-model="form.email"
                            type="email"
                            :rules="[rules.required]"
                            :disabled="loading"
                            :placeholder="$t('C00051')"
                            class="input-custom"
                            @keydown.space.prevent
                            @focusout="validateEmail"
                          ></b-form-input>
                    </b-col>
                  </b-row>
                  <b-row class="mb-3">
                    <b-col cols=12>
                        <label class="form-label form-label-mmy mt-2" for='input-2'>{{ $t('C00052')}}: </label>
                        <b-input-group>
                            <b-form-input
                              id='input-2'
                              v-model="form.password"
                              :type="passwordHidden ? 'password' : 'text'"
                              @keydown.space.prevent
                              :disabled="loading"
                              :rules="[rules.required]"
                              :placeholder="$t('C00053')"
                              class="input-custom"
                            ></b-form-input>
                            <b-input-group-append>
                                <b-icon class="pass-icon" :icon="passwordHidden ? 'eye-slash-fill' : 'eye'" @click="showPassword()"></b-icon>
                            </b-input-group-append>
                        </b-input-group>
                    </b-col>
                  </b-row>
                  <b-row class="mb-2">
                    <b-col cols=12>
                       <label class="form-label form-label-mmy mt-2" for='input-6'>{{ $t('C00071')}}: </label>
                        <b-input-group>
                            <b-form-input
                              id='input-6'
                              v-model="form.confirm_password"
                              :type="passwordHidden2 ? 'password' : 'text'"
                              @keydown.space.prevent
                              :disabled="loading"
                              :rules="[rules.required, rules.min]"
                              required
                               class="input-custom"
                              :placeholder="$t('C00076')"
                            ></b-form-input>
                          <b-input-group-append>
                              <b-icon class="pass-icon" :icon="passwordHidden2 ? 'eye-slash-fill' : 'eye'" @click="showPassword2()"></b-icon>
                          </b-input-group-append>
                        </b-input-group>
                    </b-col>
                  </b-row>
                  <b-row class="mb-3">
                    <b-col cols=12>
                      <small>
                          {{ $t('HQ00007')}} <font class="tnc-font"><a href="https://www.motherhood.com.my/page/terms-of-service" class="tnc-font" target="_blank">{{ $t('HQ00008')}}</a></font> and <font class="tnc-font"><a href="https://www.motherhood.com.my/page/privacy-policy" target="_blank" class="tnc-font">{{ $t('HQ00009')}}</a></font>
                      </small>
                    </b-col>
                  </b-row>
              </b-form>
           </b-col>
         </b-row>
         <b-row class="mb-4 margin-remove-x-side text-center">
              <b-col cols=12>
              <button class="btn btn-primary btn-lg btn-block btn-login" :loading="loading" :disabled="btndisabled" @click="submitValidate()">
                    <b-spinner v-if="loading"></b-spinner>
                    <span v-else style="font-weight:600;"> {{ $t('HQ00012')}}</span>
                </button>
            </b-col> 
          </b-row> 
          <!--
          <b-row class="margin-remove-x-side">
            <b-col cols=12 class="text-center">
              <h6 class="middleline-text">OR</h6>
            </b-col>
         </b-row>
         -->
         <b-row class="my-3  margin-remove-x-side">
            <b-col cols=12 class="text-center">
              <!--
              <b-button class="col-12 btn-sign-fb mb-4" @click="signupWithFacebook()" style="position:relative;width:90%;">
                  <b-spinner v-if="loading"></b-spinner>
                   <span v-else  style="font-weight:600;padding-left: 30px;">
                        <b-img src="/icons/login/facebook_icon.svg" style="width: 35px;
                            height: 35px;
                            position: absolute;
                            top: 0px;
                            left: 0px;"></b-img>SIGN UP WITH FACEBOOK
                    </span>
              </b-button>
              -->
              <p class="text-center"> <b-img src="/icons/login/beta_icon.svg"></b-img> &nbsp; Beta launch version 0.0.1</p>
            </b-col>
        </b-row>
        <div class="mt-auto mb-5">
            <b-row class="margin-remove-x-side text-center">
                <b-col cols=12>
                    <p><a href="/login" class="href-login"><font class="text-noaccountreg_loginemail">{{ $t('HQ00010')}} <font style="color:#2DA7AC">{{ $t('HQ00011')}}</font></font></a></p>
                </b-col>
            </b-row>    
        </div>
    </div>
  </b-container>
</template>
<style lang="scss">
   @import "./_style.scss";
  .bgimage{
    background: url(/icons/login/mmy_logo_header.png) center center no-repeat;
    background-size: cover;
    min-height: 200px;
    position:relative;
  }

  .input-custom{
    background-color:#EEF3F7 !important;
    border: 0px;
  }
  
  .input-custom:focus{
    background-color:#ffffff !important;
  }

  .form-label {
    float: left !important;
}

.login-btn {
    width:150px;
    background-color: #2DA7AC;
    color: white;
}

.pass-icon {
    margin-left: -40px;
    z-index: 999;
    margin-top: 11px;
    color: grey;
}
</style>

<script>
// import LoginForm from './components/form.vue'

export default {
  components: {
    // LoginForm
  },
  data: () => ({
    passwordHidden: true,
    passwordHidden2: true,
    loading: false,
    btndisabled:false,
    checkEmail:true,
    validateInput:true,
    form: {
      first_name: null,
      last_name: null,
      mobile: null,
      email: null,
      password: null,
      confirm_password: null,
    },
    rules: {
      required: value => !!value || this.$t('W00023'),
      min: v => v.length >= 6 || this.$t('W00022')
    },
  }),
  created(){
      this.form.email = this.$route.query.email || null
 
      let token = this.$store.getters['auth/token'] ? this.$store.getters['auth/token'] : '';
      if(token != '')
          this.$router.push({path: '/home'});
      
      window.fbAsyncInit = function() {
          FB.init({
              appId: '1037317973010452',
              cookie: true, // enable cookies to allow the server to access the session
              xfbml: true, // parse social plugins on this page
              version: 'v2.8' // use graph api version 2.8
          });
          FB.AppEvents.logPageView();   
      };

      (function(d, s, id){
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) {return;}
        js = d.createElement(s); js.id = id;
        js.src = "https://connect.facebook.net/en_US/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
  },
  mounted(){
      var selectorMobile = document.getElementById("mobileno");
      var phoneNumSettings = {
          'mask' : "***********",
          "placeholder": "",
          "definitions": {
            '*': {
              validator: "[0-9]"
            }
          }
        }
      Inputmask(phoneNumSettings).mask(selectorMobile);
},
  methods: {
     showPassword()
    {
        this.passwordHidden = !this.passwordHidden;
    },
    showPassword2()
    {
        this.passwordHidden2 = !this.passwordHidden2;
    },
    validateEmail()
    {
        if(this.form.email != undefined && this.form.email != null && this.form.email != '')
        {
            this.btndisabled = false;
            axios.post('api/auth/validate_email', {email:this.form.email}).then(res => res.data).then(res => {
                console.log(res);
                this.loading = false;
                this.checkEmail = true;

                return true;
            }).catch((error) => {
                let error_msg = error.response.data.message;
                this.$bvToast.toast(error_msg,{ variant:'danger', noCloseButton: true, solid:true})
                this.loading = false;
                this.btndisabled = true;
                this.checkEmail = false;

                return false;
            });
        }
        else
        {
            this.$bvToast.toast("Email cannot been empty",{ variant:'danger', noCloseButton: true, solid:true})
            this.loading = false;
            this.btndisabled = true;
            this.checkEmail = false;

             return false;
        }
       
    },
    submitValidate()
    {
        this.loading = true;
        this.btndisabled = true;

        //validation
        var firstname = this.form.first_name;
        var lastname  = this.form.last_name;
        var email     = this.form.email;
        var password  = this.form.password;
        var mobile    = this.form.mobile;
  
        if(firstname == "" || firstname == null || firstname == undefined) 
        {
          this.$bvToast.toast(`Please enter your first name`,{variant:'danger', noCloseButton: true})
          this.loading = false;
          this.btndisabled = false;
          this.validateInput = false;

          return false;
        }
        else if(firstname != '' && firstname != null && firstname != undefined)
        {
          if(!firstname.toString().match(/^[A-Za-z.-@]+(\s*[A-Za-z.-@]+)*$/)) 
          {
              this.$bvToast.toast(`First name only contain character`,{variant:'danger', noCloseButton: true})
              this.loading = false;
              this.btndisabled = false;
              this.validateInput = false;

              return false;
          }
        }

        if(lastname  == "" || lastname == null || lastname == undefined)
        {
          this.$bvToast.toast(`Please enter your last name`,{variant:'danger', noCloseButton: true})
          this.loading = false;
          this.btndisabled = false;
          this.validateInput = false;

          return false;
        }
        else if(lastname != '' && firstname != null && firstname != undefined)
        {
          if(!lastname.toString().match(/^[A-Za-z.-@]+(\s*[A-Za-z.-@]+)*$/)) 
          {
            this.$bvToast.toast('Last name only allowed character',{variant:'danger', noCloseButton: true})
            this.loading = false;
            this.btndisabled = false;
            this.validateInput = false;

            return false;
          }
        }

        if(mobile == "" || mobile == undefined || mobile == null)
        {
            this.$bvToast.toast(`Please enter your mobile number`,{variant:'danger', noCloseButton: true})
            this.loading = false;
            this.btndisabled = false;
            this.validateInput = false;

            return false;
        }
        else if(mobile != "")
        {
            var mobileno 		 = mobile.trim();
      			var prefix 		 = mobile.substring(0,3);
      			var firstNo 	 = mobile.substring(0,1);
      			var phoneLength  = mobile.length;

            if(firstNo != 0 && firstNo != 5){
      			  this.$bvToast.toast(`Invalid phone number format. Correct format(XXXXXXXXXXX), e.g. 0123334444`,{variant:'danger', noCloseButton: true})
              this.loading = false;
              this.btndisabled = false;
              this.validateInput = false;

              return false;
      			}
            else if(firstNo == '0'){
      				var prefixArray = ["010", "011", "012", "013", "014", "015", "016", "017", "018", "019"];
      				var checkPrefix = prefixArray.includes(prefix);
      				if(checkPrefix){
      					if(prefix == '011'){
      						
      						if(phoneLength < 10 || phoneLength > 11){
      					      this.$bvToast.toast(`Invalid phone number format. Correct format(XXXXXXXXXXX), e.g. 0123334444`,{variant:'danger', noCloseButton: true})
                      this.loading = false;
                      this.btndisabled = false;
                      this.validateInput = false;

                      return false;
      						}
      					}
      					else{
      						if(phoneLength < 10 || phoneLength > 10){
      						    this.$bvToast.toast(`Invalid phone number format. Correct format(XXXXXXXXXXX), e.g. 0123334444`,{variant:'danger', noCloseButton: true})
                      this.loading = false;
                      this.btndisabled = false;
                      this.validateInput = false;

                      return false;
      						}
      					}  
      				}
      				else
      				{
      				    this.$bvToast.toast(`Invalid phone number prefix. Correct Prefix (010,011,012,013,014,015,016,017,018,019)`,{variant:'danger', noCloseButton: true})
                  this.loading = false;
                  this.btndisabled = false;
                  this.validateInput = false;

                  return false;
      				}
      			}
            else if(firstNo == '5'){
      				if(phoneLength < 9 || phoneLength > 9){
      				    this.$bvToast.toast(`Invalid Singapore phone number format. Correct Format(5 XXXX XXXX), e.g. 566667777`,{variant:'danger', noCloseButton: true})
                  this.loading = false;
                  this.btndisabled = false;
                  this.validateInput = false;

                  return false;
      				}
      			}
        }

        if(email == "" || email == undefined || email == null)
        {
            this.$bvToast.toast(`Email cannot been empty`,{variant:'danger', noCloseButton: true})
            this.loading = false;
            this.btndisabled = false;
            this.validateInput = false;

            return false;
        }
        else
        {
            this.validateEmail();
        }
        
        if(password == "" || password == undefined || password == null)
        {
            this.$bvToast.toast(`Please insert password`,{variant:'danger', noCloseButton: true})
            this.loading = false;
            this.btndisabled = false;
            this.validateInput = false;

            return false;
        }
        else if(this.form.password.length < 6)
        {
            this.$bvToast.toast(`Password length too short. Min: 6`,{variant:'danger', noCloseButton: true})
            this.loading = false;
            this.btndisabled = false;
            this.validateInput = false;

            return false;
        }
        else if(this.form.password != this.form.confirm_password)
        {
            this.$bvToast.toast(`Password not match`,{variant:'danger', noCloseButton: true})
            this.loading = false;
            this.btndisabled = false;
            this.validateInput = false;

            return false;
        }
      
        this.submit();
        
    },
     signupWithFacebook () {
      window.FB.login(response => {   
         this.loading = true;
        if (response && response.authResponse) {
          // console.log('server response', response)
          if(response.status == "connected")
          {
              // console.log(response);
              if(response.authResponse.accessToken != undefined && response.authResponse.accessToken != "" 
                  && response.authResponse.userID != undefined && response.authResponse.userID != "")
              {
                  var arrFBRespond = {};
                  arrFBRespond["accessToken"] = response.authResponse.accessToken;
                  arrFBRespond["userID"] = response.authResponse.userID;
                  arrFBRespond["data_access_expiration_time"] = response.authResponse.data_access_expiration_time;
                  arrFBRespond["expiresIn"] = response.authResponse.expiresIn;
                  arrFBRespond["graphDomain"] = response.authResponse.graphDomain;
                  arrFBRespond["signedRequest"] = response.authResponse.signedRequest;
                 
                  this.signUpFbDetail(arrFBRespond);
              }
          }
          else
          {
              this.$bvToast.toast("Facebook login invlid",{ variant:'danger', noCloseButton: true, solid:true})
               this.loading = false;
          }
        }
      }, {scope: 'email, user_gender,user_birthday'})
    },
    signUpFbDetail(arrFBRespond){
       axios.post('/api/auth/signup_fb', arrFBRespond).then(res => res.data).then(res => {
            this.$bvToast.toast(`Sign success!`,{ variant:'success', noCloseButton: true})
            this.successFb(res.data)
            this.loading = false
      })
      .catch((error) => {
          let error_msg = error.response.data.message;
          this.$bvToast.toast(error_msg,{ variant:'danger', noCloseButton: true, solid:true})
          this.loading = false;
      });    
    },
    submit() {
        //submit register
        this.loading = true;
        axios.post('/api/auth/register_user', this.form).then(res => res.data).then(res => {
             console.log("test2" + res );
            this.loading = false
            this.btndisabled = true;
            this.$bvToast.toast(`Registration success!`,{ variant:'success', noCloseButton: true})
            //redirect to login
            this.$router.push({path: '/login'});
        })
        .catch((error) => {
            let error_msg = error.response.data.message;
            this.$bvToast.toast(error_msg,{ variant:'danger', noCloseButton: true, solid:true})
            this.loading = false;
            this.btndisabled = false;
        });    
    },
    successFb(data) {
      console.log('im data', data);
      this.$store.dispatch('auth/saveToken', data.token)
      // this.$store.dispatch('auth/setUser', data.userId)
      this.$store.dispatch('auth/setFirstname', data.firstname)
      this.$store.dispatch('auth/setLastname', data.lastname)
      this.$store.dispatch('auth/setGuid', data.guid)
      this.$store.dispatch('auth/setUserId', data.userId)
      this.$store.dispatch('auth/setEmail', data.email)

      window.location.href ='/home'
      // this.$router.push({ path:'home' });
    }
  }
}
</script>
