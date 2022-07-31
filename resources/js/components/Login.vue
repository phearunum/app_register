<template>
  <div class="container">
    <div class="app_message">Success</div>
    <div class="ivu-message" style="top: 24px; z-index: 1017"></div>
    <div class="col-sm-12" style="min-height: 120px">
      <a href="/">
        <h3 class="app_font_titel pt-4 text-white">
          <img src="/website/img/left-arrow.png" /> {{ $t("lang.efiling") }}
        </h3>
      </a>
    </div>

    <div
      class="col-lg-12 d-flex justify-content-center align-items-center"
      style="margin-top: -40px"
    >
      <div class="card shadow p-2 p-md-5" style="max-width: 30rem">
        <form class="row g-2" method="post" @submit.prevent="login">
          <div class="col-12 text-center mb-4">
            <h1 class="h3 mb-3 fw-normal app_font_titel">
              {{ $t("lang.efiling") }}
            </h1>
            <!--  <span class="text-muted">Free access to our dashboard.</span> -->
          </div>
          <div class="col-12 text-center mb-4"></div>

          <div class="col-12">
            <div class="form-group floating-label">
              <label for="floatingName">{{
                $t("lang.email_or_username")
              }}</label>
              <input
                type="text"
                class="form-control"
                name="username"
                v-model="username"
                placeholder="Username"
                autofocus
              />
            </div>
          </div>
          <div class="col-12">
            <div class="form-group floating-label">
              <label for="floatingPassword">{{ $t("lang.password") }} </label>
              <input
                type="password"
                class="form-control"
                name="password"
                v-model="password"
                placeholder="Password"
                required="required"
              />
            </div>
          </div>

          <div class="col-12 text-center mt-4">
            <button
              type="button"
              class="btn btn-block btn-primary lift text-uppercase"
              @click="login"
              :disabled="isLogging"
              :loading="isLogging"
              title=""
            >
              {{ isLogging ? "Loging..." : $t("lang.login") }}
              <img
                class="img-fluid"
                src="/website/img/next-com.png"
                alt="Dark Mode"
              />
            </button>
          </div>

          <div class="col-6 text-center mt-3">
            <span class="text-muted">
              <a href="/signup">{{ $t("lang.create_new_account") }} </a></span
            >
          </div>
          <div class="col-6 text-center mt-3">
            <span class="text-muted">
              <a href="/password/forget"
                >{{ $t("lang.forget_password") }}
              </a></span
            >
          </div>
        </form>
      </div>
    </div>
  </div>
</template>


<script>
export default {
  name: "Login",
  created: function () {
    let vm = this;
  },
  data() {
    return {
      locale: "en",
      submitted: false,
      username: "",
      password: "",
      isLogging: false,
    };
  },
  methods: {
     async login() {
       if (this.username.trim() == "")
        return this.toast_err("Please enter username ");
      if (this.password.trim() == "")
        return this.toast_err("Please enter password");
      this.isLogging = true;
      const res = await this.postAPI("/dashboard/login", {
        username: this.username,
        password: this.password,
      });
      
      if (res.data.status == 200) {
        this.toast_smg(`${res.data.smg}`)
        window.location = '/dashboard'
      } else {
        //console.log(res.data.smg)
        this.toast_err(`${res.data.smg}`);
      }
      this.isLogging = false;
    },

  },
};
</script>
