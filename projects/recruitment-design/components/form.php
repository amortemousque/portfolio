<article class="card card-dark card-form">
    <div class="card-body">
      <p class="card-subtitle">contact</p>
      <h2 class="card-title">Nous sommes à votre écoute</h2>
      <form class="form-m-4">
        <div class="form-group">
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <div class="form-group">
            <label class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-description">Check this custom checkbox</span>
            </label>
        </div>
        <div class="form-group">
            <label class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-description">Check this custom checkbox</span>
            </label>
        </div>
        <div class="form-group">
            <label class="custom-control custom-radio">
                <input id="radio1" name="radio" type="radio" class="custom-control-input">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-description">Toggle this custom radio</span>
              </label>
              <label class="custom-control custom-radio">
                <input id="radio2" name="radio" type="radio" class="custom-control-input">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-description">Or toggle this other custom radio</span>
              </label>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="form-group">
              <select class="custom-select" data-placeholder="Select an option">
                  <option value=""></option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
              </select>
            </div>
          </div>
          <div class="col-12">
            <div class="form-group">
              <select class="custom-select" multiple data-placeholder="Select an option">
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
              </select>
            </div>
          </div>
        </div>

        <div class="form-group">
            <label class="custom-file">
                <input type="file" id="file2" class="custom-file-input">
                <span class="custom-file-control"></span>
            </label>
            <small class="form-text text-muted">25 Mo max</small>
        </div>
        <div class="form-actionbar text-center">
          <button type="submit" class="btn btn-outline-primary  ">Valider</button>
        </div>
      </form>
    </div>
  </article>

<script>
    $('.custom-select').select2({
      theme: "lnh",
      width: '100%',
      allowClear: true
    });
</script>
