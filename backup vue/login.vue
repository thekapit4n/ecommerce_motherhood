
<template class="padding-remove-x-side">
  <b-container fill-height class="padding-remove-x-side">
    <div class="d-flex  justify-content-center flex-column">
        <div class="bgimage padding-remove-x-side">
            <!--
            <div class="icon-goback-chevron">
              <a href="/login">
                <b-img src="/icons/login/chevron_left_24px.svg" style="width:45px;"></b-img>
              </a>
            </div>
            -->
        </div>
        <b-row class="margin-remove-x-side mt-4">
            <b-col cols=12>
              <h5 class="default-textcolor-heading">{{ $t('HQ00011')}}</h5>
              <p class="subcopy">{{ $t('HQ00006')}}</p>
            </b-col>
        </b-row> 
         <b-row class="margin-remove-x-side">
            <b-col cols=12>
              <b-form lazy-validation>
                <b-row class="mb-3">
                  <b-col cols=12>
                    <label class="form-label form-label-mmy" for='input-1'>{{ $t('C00050')}} </label>
                      <b-form-input
                        id='input-1'
                        v-model="form.email"
                        type="text"
                        :rules="[rules.required]"
                        :disabled="loading"
                        :placeholder="$t('C00051')"
                        class="input-custom"
                      ></b-form-input>
                    </b-col>
                  </b-row>
                   <b-row class="mb-3">
                    <b-col cols=12>
                      <label class="form-label form-label-mmy" for='input-2'>{{ $t('C00052')}} </label>
                        <b-input-group>
                            <b-form-input
                              id='input-2'
                              v-model="form.password"
                              :type="passwordHidden ? 'password' : 'text'"
                              @keydown.space.prevent
                              :disabled="loading"
                              :rules="[rules.required]"
                              :placeholder="$t('C00053')"
                              maxlength=40
                              class="input-custom"
                            ></b-form-input>
                            <b-input-group-append>
                                <b-icon class="pass-icon" :icon="passwordHidden ? 'eye-slash-fill' : 'eye'" @click="showPassword()"></b-icon>
                            </b-input-group-append>
                        </b-input-group>
                      </b-col>
                  </b-row>
                  <b-row class="mt-3">
                    <b-col cols=12>
                      <p><a href="/forgot-password" class="href-register" style="color:#347277;font-weight:500">Forgot Password</a></p>
                    </b-col>
                  </b-row>
              </b-form>
           </b-col>
         </b-row>
          <b-row class="mb-4 margin-remove-x-side text-center">
              <b-col cols=12 >
              <button class="btn btn-primary btn-lg btn-block btn-login" :loading="loading" :disabled="loading" @click="submit()">
                <b-spinner v-if="loading"></b-spinner>
                <span v-else style="font-weight:600;text-transform:uppercase">{{ $t('HQ00011')}} </span>
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
                <b-button class="col-12 btn-sign-fb mb-4" @click="loginWithFacebook()" style="position:relative;width:90%;">
                    <b-spinner small v-if="loading"></b-spinner>
                    <span v-else  style="font-weight:600;padding-left:30px;">
                        <b-img src="/icons/login/facebook_icon.svg" style="width: 35px;
                            height: 35px;
                            position: absolute;
                            top: 0px;
                            left: 0px;"></b-img>SIGN IN WITH FACEBOOK
                    </span>
                </b-button>
                -->
                <p class="text-center"> <b-img src="/icons/login/beta_icon.svg"></b-img> &nbsp; Beta launch version 0.0.1</p>
              </b-col>
          </b-row>
       
        <div class="mt-auto">
            <b-row class="margin-remove-x-side text-center">
                <b-col cols=12>
                    <p><a href="/register-account" class="href-login"><font class="text-noaccountreg_loginemail">{{ $t('HQ00013')}} <font style="color:#2DA7AC">{{ $t('C00070')}}</font></font></a></p>
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
import LoginForm from './components/form.vue'

export default {
  components: {
    LoginForm,
  },
  data: () => ({
    passwordHidden: true,
    loading: false,
    form: {
      email: null,
      password: null
    },
    rules: {
      required: value => !!value || this.$t('W00023'),
      min: v => v.length >= 6 || this.$t('W00022')
    },
  }),
  created(){
      this.form.email = this.$route.query.email || null
      let token = this.$store.getters['auth/token'] ? this.$store.getters['auth/token'] : '';
      // if(token != '')
      //     this.$router.push({path: '/home'});
      // else
      //     this.$router.push({path: '/login'}).catch(()=>{});

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
  methods: {
    onEvent() {
        // when you need a reCAPTCHA challenge
        // this.$refs.recaptcha.execute();
      },
    showPassword()
    {
        this.passwordHidden = !this.passwordHidden;
    },
    validation()
    {
        return this.name.length > 7;
    },
    submit() {
        if (!this.form.email)
        {
            this.$bvToast.toast(`Please enter email!`,{variant:'danger', noCloseButton: true})
        }
        else if (!this.form.password)
        {
            this.$bvToast.toast(`Please enter password!`,{variant:'danger', noCloseButton: true})
        }
        else
        {
            this.loading = true;
            axios.post('/api/auth/authenticate', this.form).then(res => res.data).then(res => {
                  console.log('this success',res);
                  this.$bvToast.toast(`Login success!`,{ variant:'success', noCloseButton: true})
                  // this.$emit('success', res.data)
                  this.success(res.data)
                  this.loading = false
            })
            .catch((error) => {
                let error_msg = error.response.data.message;
                this.$bvToast.toast(error_msg,{ variant:'danger', noCloseButton: true, solid:true})
                this.loading = false;
            });    
      }
    },
    loginWithFacebook () {
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
                 
                  this.getFbDetail(arrFBRespond);
              }
          }
          else
          {
              this.$bvToast.toast("Facebook login invlid",{ variant:'danger', noCloseButton: true, solid:true})
               this.loading = false;
          }
        }
      }, {scope: 'email'})
    },
    getFbDetail(arrFBRespond){
       axios.post('/api/auth/get_fb_profile', arrFBRespond).then(res => res.data).then(res => {
            this.$bvToast.toast(`Login success!`,{ variant:'success', noCloseButton: true})
            this.success(res.data)
            this.loading = false
      })
      .catch((error) => {
          let error_msg = error.response.data.message;
          this.$bvToast.toast(error_msg,{ variant:'danger', noCloseButton: true, solid:true})
          this.loading = false;
      });    
    },
    success(data) {
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
