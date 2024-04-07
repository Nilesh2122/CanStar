
        <div class="container-fluid">
          <!-- --------------------------------------------------- -->
          <!--  Form Basic Start -->
          <!-- --------------------------------------------------- -->
          <div class="card bg-light-info shadow-none position-relative overflow-hidden">
            <div class="card-body px-4 py-3">
              <div class="row align-items-center">
                <div class="col-9">
                  <h4 class="fw-semibold mb-8">Form Basic</h4>
                  <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a class="text-muted text-decoration-none" href="./index.html">Dashboard</a></li>
                      <li class="breadcrumb-item" aria-current="page">Form Basic</li>
                    </ol>
                  </nav>
                </div>
                <div class="col-3">
                  <div class="text-center mb-n5">  
                    <img src="../../dist/images/breadcrumb/ChatBc.png" alt="" class="img-fluid mb-n4">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <section>
            <div class="row">
              <div class="col-12">
                <!-- ----------------------------------------- -->
                <!-- 1. Basic Form -->
                <!-- ----------------------------------------- -->
                <!-- ---------------------
                                                    start Basic Form
                                                ---------------- -->
                <div class="card">
                  <div class="card-body">
                    <h5 class="mb-3">Basic Form</h5>
                    <form>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-floating mb-3">
                            <input
                              type="text"
                              class="form-control"
                              id="tb-fname"
                              placeholder="Enter Name here"
                            />
                            <label for="tb-fname">Name</label>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-floating mb-3">
                            <input
                              type="email"
                              class="form-control"
                              id="tb-email"
                              placeholder="name@example.com"
                            />
                            <label for="tb-email">Email address</label>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-floating">
                            <input
                              type="password"
                              class="form-control"
                              id="tb-pwd"
                              placeholder="Password"
                            />
                            <label for="tb-pwd">Password</label>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-floating">
                            <input
                              type="password"
                              class="form-control"
                              id="tb-cpwd"
                              placeholder="Password"
                            />
                            <label for="tb-cpwd">Confirm Password</label>
                          </div>
                        </div>
                        <div class="col-12">
                          <div class="d-md-flex align-items-center mt-3">
                            <div class="form-check">
                              <input
                                class="form-check-input"
                                type="checkbox"
                                value=""
                                id="flexCheckDefault"
                              />
                              <label
                                class="form-check-label"
                                for="flexCheckDefault"
                              >
                                Remember me
                              </label>
                            </div>
                            <div class="ms-auto mt-3 mt-md-0">
                              <button
                                type="submit"
                                class="btn btn-info font-medium rounded-pill px-4"
                              >
                                <div class="d-flex align-items-center">
                                  <i class="ti ti-send me-2 fs-4"></i>
                                  Submit
                                </div>
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                <!-- ---------------------
                                                    end Basic Form
                                                ---------------- -->
                <!-- ----------------------------------------- -->
                <!-- 2. Disabled Form -->
                <!-- ----------------------------------------- -->
                <!-- ---------------------
                                                    start Disabled Form
                                                ---------------- -->
                <div class="card">
                  <div class="card-body">
                    <h5 class="mb-3">Disabled Form</h5>
                    <form>
                      <fieldset disabled>
                        <div class="mb-3">
                          <label for="disabledTextInput1">Disabled input</label>
                          <input
                            type="text"
                            id="disabledTextInput1"
                            class="form-control"
                            placeholder="Disabled input"
                          />
                        </div>
                        <div class="mb-3">
                          <label for="disabledSelect"
                            >Disabled select menu</label
                          >
                          <select id="disabledSelect" class="form-control">
                            <option>Disabled select</option>
                          </select>
                        </div>
                        <div class="form-check">
                          <input
                            class="form-check-input"
                            type="checkbox"
                            id="disabledFieldsetCheck"
                            disabled
                          />
                          <label
                            class="form-check-label"
                            for="disabledFieldsetCheck"
                          >
                            Can't check this
                          </label>
                        </div>
                        <button
                          type="submit"
                          class="btn btn-info rounded-pill px-4 mt-3"
                        >
                          Submit
                        </button>
                      </fieldset>
                    </form>
                  </div>
                </div>
                <!-- ---------------------
                                                    end Disabled Form
                                                ---------------- -->
                <!-- ----------------------------------------- -->
                <!-- 3. Custom File Upload -->
                <!-- ----------------------------------------- -->
                <!-- ---------------------
                                                    start Custom File Uploads
                                                ---------------- -->
                <div class="card card-body">
                  <h5 class="mb-3">Custom File Uploads</h5>
                  <div class="mb-3">
                    <label for="formFile" class="form-label"
                      >Default file input example</label
                    >
                    <input class="form-control" type="file" id="formFile" />
                  </div>
                  <div class="mb-3">
                    <label for="formFileMultiple" class="form-label"
                      >Multiple files input example</label
                    >
                    <input
                      class="form-control"
                      type="file"
                      id="formFileMultiple"
                      multiple
                    />
                  </div>
                  <div class="mb-3">
                    <label for="formFileDisabled" class="form-label"
                      >Disabled file input example</label
                    >
                    <input
                      class="form-control"
                      type="file"
                      id="formFileDisabled"
                      disabled
                    />
                  </div>
                  <div class="mb-3">
                    <label for="formFileSm" class="form-label"
                      >Small file input example</label
                    >
                    <input
                      class="form-control form-control-sm"
                      id="formFileSm"
                      type="file"
                    />
                  </div>
                  <div>
                    <label for="formFileLg" class="form-label"
                      >Large file input example</label
                    >
                    <input
                      class="form-control form-control-lg"
                      id="formFileLg"
                      type="file"
                    />
                  </div>
                </div>
                <!-- ---------------------
                                                    end Custom File Uploads
                                                ---------------- -->
              </div>
            </div>
            <!-- Row -->
            <div class="row">
              <div class="col-lg-6">
                <!-- ---------------------
                                                    start Sample Form with the Icons
                                                ---------------- -->
                <div class="card">
                  <div class="card-body">
                    <h5>Sample Form with the Icons</h5>
                    <p class="card-subtitle mb-3">
                      made with bootstrap elements
                    </p>
                    <form class="">
                      <div class="form-floating mb-3">
                        <input
                          type="text"
                          class="form-control"
                          placeholder="Username"
                        />
                        <label
                          ><i class="ti ti-user me-2 fs-4"></i>Username</label
                        >
                      </div>
                      <div class="form-floating mb-3">
                        <input
                          type="email"
                          class="form-control"
                          placeholder="Email"
                        />
                        <label
                          ><i class="ti ti-mail me-2 fs-4"></i>Email address</label
                        >
                      </div>
                      <div class="form-floating mb-3">
                        <input
                          type="password"
                          class="form-control"
                          placeholder="Password"
                        />
                        <label
                          ><i class="ti ti-lock me-2 fs-4"></i>Password</label
                        >
                      </div>
                      <div class="form-floating mb-3">
                        <input
                          type="password"
                          class="form-control"
                          placeholder="CPassword"
                        />
                        <label
                          ><i class="ti ti-lock me-2 fs-4"></i>Confirm Password</label
                        >
                      </div>

                      <div class="d-md-flex align-items-center">
                        <div class="form-check mr-sm-2">
                          <input
                            type="checkbox"
                            class="form-check-input"
                            id="sf1"
                            value="check"
                          />
                          <label class="form-check-label" for="sf1"
                            >Remember Me</label
                          >
                        </div>
                        <div class="mt-3 mt-md-0 ms-auto">
                          <button
                            type="submit"
                            class="btn btn-primary font-medium rounded-pill px-4"
                          >
                            <div class="d-flex align-items-center">
                              <i class="ti ti-send me-2 fs-4"></i>
                              Submit
                            </div>
                          </button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                <!-- ---------------------
                                                    end Sample Form with the Icons
                                                ---------------- -->
              </div>
              <div class="col-lg-6">
                <!-- ---------------------
                                                    start Info Border with Icons
                                                ---------------- -->
                <div class="card">
                  <div class="card-body">
                    <h5>Info Border with Icons</h5>
                    <p class="card-subtitle mb-3">
                      made with bootstrap elements
                    </p>
                    <form class="">
                      <div class="form-floating mb-3">
                        <input
                          type="text"
                          class="form-control border border-info"
                          placeholder="Username"
                        />
                        <label
                          ><i class="ti ti-user me-2 fs-4 text-info"></i><span class="border-start border-info ps-3"
                            >Username</span
                          ></label
                        >
                      </div>
                      <div class="form-floating mb-3">
                        <input
                          type="email"
                          class="form-control border border-info"
                          placeholder="Email"
                        />
                        <label
                          ><i class="ti ti-mail me-2 fs-4 text-info"></i><span class="border-start border-info ps-3"
                            >Email address</span
                          ></label
                        >
                      </div>
                      <div class="form-floating mb-3">
                        <input
                          type="password"
                          class="form-control border border-info"
                          placeholder="Password"
                        />
                        <label
                          ><i class="ti ti-lock me-2 fs-4 text-info"></i><span class="border-start border-info ps-3"
                            >Password</span
                          ></label
                        >
                      </div>
                      <div class="form-floating mb-3">
                        <input
                          type="password"
                          class="form-control border border-info"
                          placeholder="CPassword"
                        />
                        <label
                          ><i class="ti ti-lock me-2 fs-4 text-info"></i><span class="border-start border-info ps-3"
                            >Confirm Password</span
                          ></label
                        >
                      </div>

                      <div class="d-md-flex align-items-center">
                        <div class="form-check mr-sm-2">
                          <input
                            type="checkbox"
                            class="form-check-input"
                            id="sf2"
                            value="check"
                          />
                          <label class="form-check-label" for="sf2"
                            >Remember Me</label
                          >
                        </div>
                        <div class="mt-3 mt-md-0 ms-auto">
                          <button
                            type="submit"
                            class="btn btn-info font-medium rounded-pill px-4"
                          >
                            <div class="d-flex align-items-center">
                              <i class="ti ti-send me-2 fs-4"></i>
                              Submit
                            </div>
                          </button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                <!-- ---------------------
                                                    end Info Border with Icons
                                                ---------------- -->
              </div>
              <div class="col-lg-6">
                <!-- ---------------------
                                                    start Warning Border with Icons
                                                ---------------- -->
                <div class="card">
                  <div class="card-body">
                    <h5>Warning Border with Icons</h5>
                    <p class="card-subtitle mb-3">
                      made with bootstrap elements
                    </p>
                    <form class="">
                      <div class="form-floating mb-3">
                        <input
                          type="text"
                          class="form-control border border-warning"
                          placeholder="Username"
                        />
                        <label
                          ><i class="ti ti-user me-2 fs-4 text-warning"></i><span class="border-start border-warning ps-3"
                            >Username</span
                          ></label
                        >
                      </div>
                      <div class="form-floating mb-3">
                        <input
                          type="email"
                          class="form-control border border-warning"
                          placeholder="Email"
                        />
                        <label
                          ><i class="ti ti-mail me-2 fs-4 text-warning"></i><span class="border-start border-warning ps-3"
                            >Email address</span
                          ></label
                        >
                      </div>
                      <div class="form-floating mb-3">
                        <input
                          type="password"
                          class="form-control border border-warning"
                          placeholder="Password"
                        />
                        <label
                          ><i class="ti ti-lock me-2 fs-4 text-warning"></i><span class="border-start border-warning ps-3"
                            >Password</span
                          ></label
                        >
                      </div>
                      <div class="form-floating mb-3">
                        <input
                          type="password"
                          class="form-control border border-warning"
                          placeholder="CPassword"
                        />
                        <label
                          ><i class="ti ti-lock me-2 fs-4 text-warning"></i><span class="border-start border-warning ps-3"
                            >Confirm Password</span
                          ></label
                        >
                      </div>

                      <div class="d-md-flex align-items-center">
                        <div class="form-check mr-sm-2">
                          <input
                            type="checkbox"
                            class="form-check-input"
                            id="sf3"
                            value="check"
                          />
                          <label class="form-check-label" for="sf3"
                            >Remember Me</label
                          >
                        </div>
                        <div class="mt-3 mt-md-0 ms-auto">
                          <button
                            type="submit"
                            class="btn btn-warning font-medium rounded-pill px-4"
                          >
                            <div class="d-flex align-items-center">
                              <i class="ti ti-send me-2 fs-4"></i>
                              Submit
                            </div>
                          </button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                <!-- ---------------------
                                                    end Warning Border with Icons
                                                ---------------- -->
              </div>
              <div class="col-lg-6">
                <!-- ---------------------
                                                    start Primary Border with Icons
                                                ---------------- -->
                <div class="card">
                  <div class="card-body">
                    <h5>Primary Border with Icons</h5>
                    <p class="card-subtitle mb-3">
                      made with bootstrap elements
                    </p>
                    <form class="">
                      <div class="form-floating mb-3">
                        <input
                          type="text"
                          class="form-control border border-primary"
                          placeholder="Username"
                        />
                        <label
                          ><i class="ti ti-user me-2 fs-4 text-primary"></i><span class="border-start border-primary ps-3"
                            >Username</span
                          ></label
                        >
                      </div>
                      <div class="form-floating mb-3">
                        <input
                          type="email"
                          class="form-control border border-primary"
                          placeholder="Email"
                        />
                        <label
                          ><i class="ti ti-mail me-2 fs-4 text-primary"></i><span class="border-start border-primary ps-3"
                            >Email address</span
                          ></label
                        >
                      </div>
                      <div class="form-floating mb-3">
                        <input
                          type="password"
                          class="form-control border border-primary"
                          placeholder="Password"
                        />
                        <label
                          ><i class="ti ti-lock me-2 fs-4 text-primary"></i><span class="border-start border-primary ps-3"
                            >Password</span
                          ></label
                        >
                      </div>
                      <div class="form-floating mb-3">
                        <input
                          type="password"
                          class="form-control border border-primary"
                          placeholder="CPassword"
                        />
                        <label
                          ><i class="ti ti-lock me-2 fs-4 text-primary"></i><span class="border-start border-primary ps-3"
                            >Confirm Password</span
                          ></label
                        >
                      </div>

                      <div class="d-md-flex align-items-center">
                        <div class="form-check mr-sm-2">
                          <input
                            type="checkbox"
                            class="form-check-input"
                            id="sf4"
                            value="check"
                          />
                          <label class="form-check-label" for="sf4"
                            >Remember Me</label
                          >
                        </div>
                        <div class="mt-3 mt-md-0 ms-auto">
                          <button
                            type="submit"
                            class="btn btn-primary font-medium rounded-pill px-4"
                          >
                            <div class="d-flex align-items-center">
                              <i class="ti ti-send me-2 fs-4"></i>
                              Submit
                            </div>
                          </button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                <!-- ---------------------
                                                    end Primary Border with Icons
                                                ---------------- -->
              </div>
              <div class="col-lg-6">
                <!-- ---------------------
                                                    start Success Border with Icons
                                                ---------------- -->
                <div class="card">
                  <div class="card-body">
                    <h5>Success Border with Icons</h5>
                    <p class="card-subtitle mb-3">
                      made with bootstrap elements
                    </p>
                    <form class="">
                      <div class="form-floating mb-3">
                        <input
                          type="text"
                          class="form-control border border-success"
                          placeholder="Username"
                        />
                        <label
                          ><i class="ti ti-user me-2 fs-4 text-success"></i><span class="border-start border-success ps-3"
                            >Username</span
                          ></label
                        >
                      </div>
                      <div class="form-floating mb-3">
                        <input
                          type="email"
                          class="form-control border border-success"
                          placeholder="Email"
                        />
                        <label
                          ><i class="ti ti-mail me-2 fs-4 text-success"></i><span class="border-start border-success ps-3"
                            >Email address</span
                          ></label
                        >
                      </div>
                      <div class="form-floating mb-3">
                        <input
                          type="password"
                          class="form-control border border-success"
                          placeholder="Password"
                        />
                        <label
                          ><i class="ti ti-lock me-2 fs-4 text-success"></i><span class="border-start border-success ps-3"
                            >Password</span
                          ></label
                        >
                      </div>
                      <div class="form-floating mb-3">
                        <input
                          type="password"
                          class="form-control border border-success"
                          placeholder="CPassword"
                        />
                        <label
                          ><i class="ti ti-lock me-2 fs-4 text-success"></i><span class="border-start border-success ps-3"
                            >Confirm Password</span
                          ></label
                        >
                      </div>

                      <div class="d-md-flex align-items-center">
                        <div class="form-check mr-sm-2">
                          <input
                            type="checkbox"
                            class="form-check-input"
                            id="sf5"
                            value="check"
                          />
                          <label class="form-check-label" for="sf5"
                            >Remember Me</label
                          >
                        </div>
                        <div class="mt-3 mt-md-0 ms-auto">
                          <button
                            type="submit"
                            class="btn btn-success font-medium rounded-pill px-4"
                          >
                            <div class="d-flex align-items-center">
                              <i class="ti ti-send me-2 fs-4"></i>
                              Submit
                            </div>
                          </button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                <!-- ---------------------
                                                    end Success Border with Icons
                                                ---------------- -->
              </div>
              <div class="col-lg-6">
                <!-- ---------------------
                                                    start Danger Border with Icons
                                                ---------------- -->
                <div class="card">
                  <div class="card-body">
                    <h5>Danger Border with Icons</h5>
                    <p class="card-subtitle mb-3">
                      made with bootstrap elements
                    </p>
                    <form class="">
                      <div class="form-floating mb-3">
                        <input
                          type="text"
                          class="form-control border border-danger"
                          placeholder="Username"
                        />
                        <label
                          ><i class="ti ti-user me-2 fs-4 text-danger"></i><span class="border-start border-danger ps-3"
                            >Username</span
                          ></label
                        >
                      </div>
                      <div class="form-floating mb-3">
                        <input
                          type="email"
                          class="form-control border border-danger"
                          placeholder="Email"
                        />
                        <label
                          ><i class="ti ti-mai me-2 fs-4 text-danger"></i><span class="border-start border-danger ps-3"
                            >Email address</span
                          ></label
                        >
                      </div>
                      <div class="form-floating mb-3">
                        <input
                          type="password"
                          class="form-control border border-danger"
                          placeholder="Password"
                        />
                        <label
                          ><i class="ti ti-lock me-2 fs-4 text-danger"></i><span class="border-start border-danger ps-3"
                            >Password</span
                          ></label
                        >
                      </div>
                      <div class="form-floating mb-3">
                        <input
                          type="password"
                          class="form-control border border-danger"
                          placeholder="CPassword"
                        />
                        <label
                          ><i class="ti ti-lock me-2 fs-4 text-danger"></i><span class="border-start border-danger ps-3"
                            >Confirm Password</span
                          ></label
                        >
                      </div>

                      <div class="d-md-flex align-items-center">
                        <div class="form-check mr-sm-2">
                          <input
                            type="checkbox"
                            class="form-check-input"
                            id="sf6"
                            value="check"
                          />
                          <label class="form-check-label" for="sf6"
                            >Remember Me</label
                          >
                        </div>
                        <div class="mt-3 mt-md-0 ms-auto">
                          <button
                            type="submit"
                            class="btn btn-danger font-medium rounded-pill px-4"
                          >
                            <div class="d-flex align-items-center">
                              <i class="ti ti-send me-2 fs-4"></i>
                              Submit
                            </div>
                          </button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                <!-- ---------------------
                                                    end Danger Border with Icons
                                                ---------------- -->
              </div>
            </div>
            <!-- Row -->
            <!-- .row -->
            <div class="row">
              <div class="col-sm-12">
                <!-- ---------------------
                                                    start Default Form Elements
                                                ---------------- -->
                <div class="card card-body">
                  <h5>Default Form Elements</h5>
                  <p class="card-subtitle mb-3">
                    All bootstrap element classies
                  </p>

                  <form class="form-horizontal">
                    <div class="mb-3">
                      <label
                        >Default Text
                        <span class="help"> e.g. "George deo"</span></label
                      >
                      <input
                        type="text"
                        class="form-control"
                        value="George deo..."
                      />
                    </div>
                    <div class="mb-3">
                      <label for="example-email"
                        >Email
                        <span class="help">
                          e.g. "example@gmail.com"</span
                        ></label
                      >
                      <input
                        type="email"
                        id="example-email"
                        name="example-email"
                        class="form-control"
                        placeholder="Email"
                      />
                    </div>
                    <div class="mb-3">
                      <label>Password</label>
                      <input
                        type="password"
                        class="form-control"
                        value="password"
                      />
                    </div>
                    <div class="mb-3">
                      <label>Placeholder</label>
                      <input
                        type="text"
                        class="form-control"
                        placeholder="placeholder"
                      />
                    </div>
                    <div class="mb-3">
                      <label>Text area</label>
                      <textarea class="form-control" rows="5"></textarea>
                    </div>
                    <div class="mb-3">
                      <label>Read only input</label>
                      <input
                        class="form-control"
                        type="text"
                        placeholder="Readonly input here…"
                        readonly
                      />
                    </div>
                    <div class="mb-3">
                      <fieldset disabled>
                        <label for="disabledTextInput">Disabled input</label>
                        <input
                          type="text"
                          id="disabledTextInput"
                          class="form-control"
                          placeholder="Disabled input"
                        />
                      </fieldset>
                    </div>
                    <div class="mb-3 row pt-3">
                      <div class="col-sm-4">
                        <div class="form-check">
                          <input
                            type="checkbox"
                            class="form-check-input"
                            id="customCheck1"
                          />
                          <label class="form-check-label" for="customCheck1"
                            >Check this custom checkbox</label
                          >
                        </div>
                        <div class="form-check">
                          <input
                            type="checkbox"
                            class="form-check-input"
                            id="customCheck2"
                          />
                          <label class="form-check-label" for="customCheck2"
                            >Check this custom checkbox</label
                          >
                        </div>
                        <div class="form-check">
                          <input
                            type="checkbox"
                            class="form-check-input"
                            id="customCheck3"
                          />
                          <label class="form-check-label" for="customCheck3"
                            >Check this custom checkbox</label
                          >
                        </div>
                      </div>
                      <div class="col-sm-4">
                        <div class="custom-control custom-radio">
                          <input
                            type="radio"
                            id="customRadio1"
                            name="customRadio"
                            class="form-check-input"
                          />
                          <label class="form-check-label" for="customRadio1"
                            >Toggle this custom radio</label
                          >
                        </div>
                        <div class="custom-control custom-radio">
                          <input
                            type="radio"
                            id="customRadio2"
                            name="customRadio"
                            class="form-check-input"
                          />
                          <label class="form-check-label" for="customRadio2"
                            >Toggle this custom radio</label
                          >
                        </div>
                      </div>
                    </div>
                    <div class="form-check form-switch">
                      <input
                        class="form-check-input"
                        type="checkbox"
                        id="flexSwitchCheckDefault"
                      />
                      <label
                        class="form-check-label"
                        for="flexSwitchCheckDefault"
                        >Default switch checkbox input</label
                      >
                    </div>
                    <div class="form-check form-switch">
                      <input
                        class="form-check-input"
                        type="checkbox"
                        id="flexSwitchCheckDisabled"
                        disabled
                      />
                      <label
                        class="form-check-label"
                        for="flexSwitchCheckDisabled"
                        >Disabled switch checkbox input</label
                      >
                    </div>
                    <div class="mb-3">
                      <label>Input Select</label>
                      <select
                        class="form-select col-12"
                        id="inlineFormCustomSelect"
                      >
                        <option selected>Choose...</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                      </select>
                    </div>
                    <div class="mb-3">
                      <label>Default file upload</label>
                      <input type="file" class="form-control" />
                    </div>
                    <div class="mb-3">
                      <label>Custom File upload</label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span
                            class="input-group-text"
                            id="inputGroupFileAddon01"
                            >Upload</span
                          >
                        </div>
                        <div class="custom-file">
                          <input
                            type="file"
                            class="form-control"
                            id="inputGroupFile01"
                            aria-describedby="inputGroupFileAddon01"
                          />
                        </div>
                      </div>
                    </div>
                    <div class="mb-3">
                      <label>Helping text</label>
                      <input
                        type="text"
                        class="form-control"
                        placeholder="Helping text"
                      />
                      <span class="help-block"
                        ><small
                          >A block of help text that breaks onto a new line and
                          may extend beyond one line.</small
                        ></span
                      >
                    </div>
                  </form>
                </div>
                <!-- ---------------------
                                                    end Default Form Elements
                                                ---------------- -->
              </div>
            </div>
            <!-- /.row -->
            <!-- Row -->
            <div class="row">
              <div class="col-lg-12">
                <!-- ---------------------
                                                    start Person Info
                                                ---------------- -->
                <div class="card">
                  <div class="card-header bg-primary">
                    <h4 class="mb-0 text-white">Other Sample form</h4>
                  </div>
                  <form action="#">
                    <div>
                      <div class="card-body">
                        <h5>Person Info</h5>
                        <div class="row pt-3">
                          <div class="col-md-6">
                            <div class="mb-3">
                              <label class="control-label">First Name</label>
                              <input
                                type="text"
                                id="firstName"
                                class="form-control"
                                placeholder="John doe"
                              />
                              <small class="form-control-feedback">
                                This is inline help
                              </small>
                            </div>
                          </div>
                          <!--/span-->
                          <div class="col-md-6">
                            <div class="mb-3 has-danger">
                              <label class="control-label">Last Name</label>
                              <input
                                type="text"
                                id="lastName"
                                class="form-control form-control-danger"
                                placeholder="12n"
                              />
                              <small class="form-control-feedback">
                                This field has error.
                              </small>
                            </div>
                          </div>
                          <!--/span-->
                        </div>
                        <!--/row-->
                        <div class="row">
                          <div class="col-md-6">
                            <div class="mb-3 has-success">
                              <label class="control-label">Gender</label>
                              <select class="form-control custom-select">
                                <option value="">Male</option>
                                <option value="">Female</option>
                              </select>
                              <small class="form-control-feedback">
                                Select your gender
                              </small>
                            </div>
                          </div>
                          <!--/span-->
                          <div class="col-md-6">
                            <div class="mb-3">
                              <label class="control-label">Date of Birth</label>
                              <input type="date" class="form-control" />
                            </div>
                          </div>
                          <!--/span-->
                        </div>
                        <!--/row-->
                        <div class="row">
                          <div class="col-md-6">
                            <div class="mb-3">
                              <label class="control-label">Category</label>
                              <select
                                class="form-control form-select"
                                data-placeholder="Choose a Category"
                                tabindex="1"
                              >
                                <option value="Category 1">Category 1</option>
                                <option value="Category 2">Category 2</option>
                                <option value="Category 3">Category 5</option>
                                <option value="Category 4">Category 4</option>
                              </select>
                            </div>
                          </div>
                          <!--/span-->
                          <div class="col-md-6">
                            <div class="mb-3">
                              <label class="control-label">Membership</label>
                              <div class="form-check">
                                <input
                                  type="radio"
                                  id="customRadio11"
                                  name="customRadio"
                                  class="form-check-input"
                                />
                                <label
                                  class="form-check-label"
                                  for="customRadio11"
                                  >Free</label
                                >
                              </div>
                              <div class="form-check">
                                <input
                                  type="radio"
                                  id="customRadio22"
                                  name="customRadio"
                                  class="form-check-input"
                                />
                                <label
                                  class="form-check-label"
                                  for="customRadio22"
                                  >Paid</label
                                >
                              </div>
                            </div>
                          </div>
                          <!--/span-->
                        </div>
                      </div>
                      <hr />
                      <div class="card-body">
                        <!--/row-->
                        <h5 class="mb-4">Address</h5>
                        <div class="row">
                          <div class="col-md-12">
                            <div class="mb-3">
                              <label>Street</label>
                              <input type="text" class="form-control" />
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="mb-3">
                              <label>City</label>
                              <input type="text" class="form-control" />
                            </div>
                          </div>
                          <!--/span-->
                          <div class="col-md-6">
                            <div class="mb-3">
                              <label>State</label>
                              <input type="text" class="form-control" />
                            </div>
                          </div>
                          <!--/span-->
                        </div>
                        <!--/row-->
                        <div class="row">
                          <div class="col-md-6">
                            <div class="mb-3">
                              <label>Post Code</label>
                              <input type="text" class="form-control" />
                            </div>
                          </div>
                          <!--/span-->
                          <div class="col-md-6">
                            <div class="mb-3">
                              <label>Country</label>
                              <select class="form-control form-select">
                                <option>--Select your Country--</option>
                                <option>India</option>
                                <option>Sri Lanka</option>
                                <option>USA</option>
                              </select>
                            </div>
                          </div>
                          <!--/span-->
                        </div>
                      </div>
                      <div class="form-actions">
                        <div class="card-body border-top">
                          <button
                            type="submit"
                            class="btn btn-success rounded-pill px-4"
                          >
                            <div class="d-flex align-items-center">
                              <i class="ti ti-device-floppy me-1 fs-4"></i>
                              Save
                            </div>
                          </button>
                          <button
                            type="button"
                            class="btn btn-danger rounded-pill px-4 ms-2 text-white"
                          >
                            Cancel
                          </button>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
                <!-- ---------------------
                                                    end Person Info
                                                ---------------- -->
              </div>
            </div>
            <!-- Row -->
            <!-- .row -->
            <div class="row">
              <div class="col-sm-12">
                <!-- ---------------------
                                                    start Default Basic Forms
                                                ---------------- -->
                <div class="card">
                  <div class="card-body">
                    <h5>Default Basic Forms</h5>
                    <p class="card-subtitle mb-3">
                      All bootstrap element classies
                    </p>
                    <form class="form">
                      <div class="mb-3 row">
                        <label
                          for="example-text-input"
                          class="col-md-2 col-form-label"
                          >Text</label
                        >
                        <div class="col-md-10">
                          <input
                            class="form-control"
                            type="text"
                            value="Artisanal kale"
                            id="example-text-input"
                          />
                        </div>
                      </div>
                      <div class="mb-3 row">
                        <label
                          for="example-search-input"
                          class="col-md-2 col-form-label"
                          >Search</label
                        >
                        <div class="col-md-10">
                          <input
                            class="form-control"
                            type="search"
                            value="How do I shoot web"
                            id="example-search-input"
                          />
                        </div>
                      </div>
                      <div class="mb-3 row">
                        <label
                          for="example-email-input"
                          class="col-md-2 col-form-label"
                          >Email</label
                        >
                        <div class="col-md-10">
                          <input
                            class="form-control"
                            type="email"
                            value="bootstrap@example.com"
                            id="example-email-input"
                          />
                        </div>
                      </div>
                      <div class="mb-3 row">
                        <label
                          for="example-url-input"
                          class="col-md-2 col-form-label"
                          >URL</label
                        >
                        <div class="col-md-10">
                          <input
                            class="form-control"
                            type="url"
                            value="https://getbootstrap.com"
                            id="example-url-input"
                          />
                        </div>
                      </div>
                      <div class="mb-3 row">
                        <label
                          for="example-tel-input"
                          class="col-md-2 col-form-label"
                          >Telephone</label
                        >
                        <div class="col-md-10">
                          <input
                            class="form-control"
                            type="tel"
                            value="1-(555)-555-5555"
                            id="example-tel-input"
                          />
                        </div>
                      </div>
                      <div class="mb-3 row">
                        <label
                          for="example-password-input"
                          class="col-md-2 col-form-label"
                          >Password</label
                        >
                        <div class="col-md-10">
                          <input
                            class="form-control"
                            type="password"
                            value="hunter2"
                            id="example-password-input"
                          />
                        </div>
                      </div>
                      <div class="mb-3 row">
                        <label
                          for="example-number-input"
                          class="col-md-2 col-form-label"
                          >Number</label
                        >
                        <div class="col-md-10">
                          <input
                            class="form-control"
                            type="number"
                            value="42"
                            id="example-number-input"
                          />
                        </div>
                      </div>
                      <div class="mb-3 row">
                        <label
                          for="example-datetime-local-input"
                          class="col-md-2 col-form-label"
                          >Date and time</label
                        >
                        <div class="col-md-10">
                          <input
                            class="form-control"
                            type="datetime-local"
                            value="2011-08-19T13:45:00"
                            id="example-datetime-local-input"
                          />
                        </div>
                      </div>
                      <div class="mb-3 row">
                        <label
                          for="example-date-input"
                          class="col-md-2 col-form-label"
                          >Date</label
                        >
                        <div class="col-md-10">
                          <input
                            class="form-control"
                            type="date"
                            value="2011-08-19"
                            id="example-date-input"
                          />
                        </div>
                      </div>
                      <div class="mb-3 row">
                        <label
                          for="example-month-input"
                          class="col-md-2 col-form-label"
                          >Month</label
                        >
                        <div class="col-md-10">
                          <input
                            class="form-control"
                            type="month"
                            value="2011-08"
                            id="example-month-input"
                          />
                        </div>
                      </div>
                      <div class="mb-3 row">
                        <label
                          for="example-week-input"
                          class="col-md-2 col-form-label"
                          >Week</label
                        >
                        <div class="col-md-10">
                          <input
                            class="form-control"
                            type="week"
                            value="2011-W33"
                            id="example-week-input"
                          />
                        </div>
                      </div>
                      <div class="mb-3 row">
                        <label
                          for="example-time-input"
                          class="col-md-2 col-form-label"
                          >Time</label
                        >
                        <div class="col-md-10">
                          <input
                            class="form-control"
                            type="time"
                            value="13:45:00"
                            id="example-time-input"
                          />
                        </div>
                      </div>
                      <div class="mb-3 row">
                        <label
                          for="example-month-input2"
                          class="col-md-2 col-form-label"
                          >Select</label
                        >
                        <div class="col-md-10">
                          <select
                            class="form-select col-12"
                            id="example-month-input2"
                          >
                            <option selected="">Choose...</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                          </select>
                        </div>
                      </div>
                      <div class="mb-3 row">
                        <label
                          for="example-color-input"
                          class="col-md-2 col-form-label"
                          >Color</label
                        >
                        <div class="col-md-10">
                          <input
                            class="form-control"
                            type="color"
                            value="#563d7c"
                            id="example-color-input"
                          />
                        </div>
                      </div>
                      <div class="mb-3 row">
                        <label
                          for="example-color-input"
                          class="col-md-2 col-form-label"
                          >Input Range</label
                        >
                        <div class="col-md-10">
                          <input
                            type="range"
                            class="form-range"
                            id="range"
                            value="50"
                          />
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                <!-- ---------------------
                                                    end Default Basic Forms
                                                ---------------- -->
              </div>
            </div>
            <!-- /.row -->
            <!-- .row -->
            <div class="row">
              <div class="col-sm-12">
                <!-- ---------------------
                                                    start Input groups
                                                ---------------- -->
                <div class="card card-body">
                  <h5>Input groups</h5>
                  <p class="card-subtitle mb-3">
                    All bootstrap element classies
                  </p>
                  <div class="row">
                    <div class="col-sm-12 col-xs-12">
                      <form>
                        <div class="input-group mb-3">
                          <span class="input-group-text" id="basic-addon1"
                            >@</span
                          >
                          <input
                            type="text"
                            class="form-control"
                            placeholder="Username"
                            aria-label="Username"
                            aria-describedby="basic-addon1"
                          />
                        </div>
                        <div class="input-group mb-3">
                          <input
                            type="text"
                            class="form-control"
                            placeholder="Recipient's username"
                            aria-label="Recipient's username"
                            aria-describedby="basic-addon2"
                          />
                          <span class="input-group-text" id="basic-addon2"
                            >@example.com</span
                          >
                        </div>
                        <div class="input-group mb-3">
                          <span class="input-group-text" id="basic-addon3"
                            >https://example.com/users/</span
                          >
                          <input
                            type="text"
                            class="form-control"
                            id="basic-url"
                            aria-describedby="basic-addon3"
                          />
                        </div>
                        <div class="input-group mb-3">
                          <span class="input-group-text">$</span>
                          <input
                            type="text"
                            class="form-control"
                            aria-label="Amount (to the nearest dollar)"
                          />
                          <span class="input-group-text">.00</span>
                        </div>
                        <div class="input-group">
                          <span class="input-group-text">$</span>
                          <span class="input-group-text">0.00</span>
                          <input
                            type="text"
                            class="form-control"
                            aria-label="Amount (to the nearest dollar)"
                          />
                        </div>
                        <!-- mb-3 -->
                      </form>
                    </div>
                    <div class="col-sm-12 col-xs-12">
                      <form>
                        <label class="control-label mt-3"
                          >Checkboxes and radio addons</label
                        >
                        <div class="row">
                          <div class="col-lg-6">
                            <div class="input-group mb-2">
                              <div class="input-group-text">
                                <div class="form-check mr-sm-2">
                                  <input
                                    type="checkbox"
                                    class="form-check-input"
                                    id="checkbox3"
                                    value="check"
                                  />
                                  <label
                                    class="form-check-label"
                                    for="checkbox3"
                                  ></label>
                                </div>
                              </div>
                              <input
                                type="text"
                                class="form-control"
                                aria-label="Text input with checkbox"
                              />
                            </div>
                          </div>
                          <div class="col-lg-6">
                            <div class="input-group">
                              <div class="input-group-text">
                                <div class="custom-control custom-radio">
                                  <input
                                    type="radio"
                                    id="customRadio5"
                                    name="customRadio"
                                    class="form-check-input"
                                  />
                                  <label
                                    class="form-check-label"
                                    for="customRadio5"
                                  ></label>
                                </div>
                              </div>
                              <input
                                type="text"
                                class="form-control"
                                aria-label="Text input with radio button"
                              />
                            </div>
                          </div>
                        </div>
                        <label class="control-label mt-3"
                          >Multiple addons</label
                        >
                        <div class="row">
                          <div class="col-lg-6">
                            <div class="input-group mb-2">
                              <div class="input-group-text">
                                <div class="form-check mr-sm-2">
                                  <input
                                    type="checkbox"
                                    class="form-check-input"
                                    id="checkbox00"
                                    value="check"
                                  />
                                  <label
                                    class="form-check-label"
                                    for="checkbox00"
                                  ></label>
                                </div>
                              </div>
                              <span class="input-group-text">0.00</span>
                              <input
                                type="text"
                                class="form-control"
                                aria-label="Text input with checkbox"
                              />
                            </div>
                          </div>
                          <div class="col-lg-6">
                            <div class="input-group">
                              <span class="input-group-text">$</span>
                              <span class="input-group-text">0.00</span>
                              <input
                                type="text"
                                class="form-control"
                                aria-label="Amount (to the nearest dollar)"
                              />
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>
                    <div class="col-sm-12 col-xs-12">
                      <form class="input-form">
                        <label class="control-label mt-3">Button addons</label>
                        <div class="row">
                          <div class="col-lg-6">
                            <div class="input-group mb-3">
                              <button class="btn btn-info" type="button">
                                Go!
                              </button>
                              <input
                                type="text"
                                class="form-control"
                                placeholder=""
                                aria-label=""
                                aria-describedby="basic-addon1"
                              />
                            </div>
                          </div>
                          <div class="col-lg-6">
                            <div class="input-group mb-3">
                              <input
                                type="text"
                                class="form-control"
                                placeholder=""
                                aria-label=""
                                aria-describedby="basic-addon1"
                              />
                              <button class="btn btn-info" type="button">
                                Go!
                              </button>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-lg-12">
                            <div class="input-group mb-3">
                              <button
                                class="btn btn-light-danger font-medium text-danger"
                                type="button"
                              >
                                <div class="d-flex align-items-center">
                                  <i class="ti ti-circle-half me-1 fs-4"></i>
                                  Hate It
                                </div>
                              </button>
                              <input
                                type="text"
                                class="form-control"
                                placeholder=""
                                aria-label=""
                                aria-describedby="basic-addon1"
                              />
                              <button
                                class="btn btn-danger text-white font-medium"
                                type="button"
                              >
                                <div class="d-flex align-items-center">
                                  <i class="ti ti-heart me-1 fs-4"></i>
                                  Love It
                                </div>
                              </button>
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>
                    <div class="col-sm-12 col-xs-12">
                      <label class="control-label mt-3">Dropdown addons</label>
                      <form class="input-form">
                        <div class="row">
                          <div class="col-lg-6">
                            <div class="input-group mb-3">
                              <button
                                class="btn btn-light-secondary text-secondary dropdown-toggle"
                                type="button"
                                data-bs-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false"
                              >
                                Dropdown
                              </button>
                              <div class="dropdown-menu">
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0)"
                                  >Action</a
                                >
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0)"
                                  >Another action</a
                                >
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0)"
                                  >Something else here</a
                                >
                                <div
                                  role="separator"
                                  class="dropdown-divider"
                                ></div>
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0)"
                                  >Separated link</a
                                >
                              </div>
                              <input
                                type="text"
                                class="form-control"
                                aria-label="Text input with dropdown button"
                              />
                            </div>
                          </div>
                          <div class="col-lg-6">
                            <div class="input-group mb-3">
                              <input
                                type="text"
                                class="form-control"
                                aria-label="Text input with dropdown button"
                              />
                              <div class="input-group-append">
                                <button
                                  class="btn btn-light-secondary text-secondary dropdown-toggle"
                                  type="button"
                                  data-bs-toggle="dropdown"
                                  aria-haspopup="true"
                                  aria-expanded="false"
                                >
                                  Dropdown
                                </button>
                                <div class="dropdown-menu">
                                  <a
                                    class="dropdown-item"
                                    href="javascript:void(0)"
                                    >Action</a
                                  >
                                  <a
                                    class="dropdown-item"
                                    href="javascript:void(0)"
                                    >Another action</a
                                  >
                                  <a
                                    class="dropdown-item"
                                    href="javascript:void(0)"
                                    >Something else here</a
                                  >
                                  <div
                                    role="separator"
                                    class="dropdown-divider"
                                  ></div>
                                  <a
                                    class="dropdown-item"
                                    href="javascript:void(0)"
                                    >Separated link</a
                                  >
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                <!-- ---------------------
                                                    end Input groups
                                                ---------------- -->
              </div>
            </div>
            <!-- /.row -->
            <!-- .row -->
            <div class="row">
              <div class="col-sm-12">
                <!-- ---------------------
                                                    start Input States
                                                ---------------- -->
                <div class="card card-body">
                  <h5>Input States</h5>
                  <p class="card-subtitle mb-3">
                    Validation styles for error, warning, and success states on
                    form controls.
                  </p>
                  <div class="row">
                    <div class="col-sm-6 col-xs-12">
                      <form class="form-horizontal row">
                        <div class="col-12">
                          <div class="mb-3">
                            <label
                              class="form-control-label"
                              for="inputSuccess1"
                              >Input with success</label
                            >
                            <input
                              type="text"
                              class="form-control is-valid"
                              id="inputSuccess1"
                            />
                            <div class="valid-feedback">
                              Success! You've done it.
                            </div>
                          </div>
                          <div class="mb-3">
                            <label class="form-control-label" for="inputDanger1"
                              >Input with danger</label
                            >
                            <input
                              type="text"
                              class="form-control is-invalid"
                              id="inputDanger1"
                            />
                            <div class="invalid-feedback">
                              Sorry, that username's taken. Try another?
                            </div>
                          </div>
                        </div>
                      </form>
                      <form class="form-horizontal">
                        <div class="mb-3 row">
                          <label
                            for="inputHorizontalSuccess"
                            class="col-sm-2 col-form-label"
                            >Email</label
                          >
                          <div class="col-sm-10">
                            <input
                              type="email"
                              class="form-control is-valid"
                              id="inputHorizontalSuccess"
                              placeholder="name@example.com"
                            />
                            <div class="valid-feedback">
                              Success! You've done it.
                            </div>
                          </div>
                        </div>
                        <div class="mb-3 row">
                          <label
                            for="inputHorizontalDnger"
                            class="col-sm-2 col-form-label"
                            >Email</label
                          >
                          <div class="col-sm-10">
                            <input
                              type="email"
                              class="form-control is-invalid"
                              id="inputHorizontalDnger"
                              placeholder="name@example.com"
                            />
                            <div class="invalid-feedback">
                              Sorry, that username's taken. Try another?
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>
                    <div class="col-sm-5 offset-sm-1 col-xs-12">
                      <form class="form-horizontal row">
                        <div class="col-12">
                          <div class="mb-3">
                            <label
                              class="col-sm-3 form-control-label"
                              for="example-input-small"
                              >Small</label
                            >
                            <div class="col-sm-6">
                              <input
                                type="text"
                                id="example-input-small"
                                name="example-input-small"
                                class="form-control form-control-sm"
                                placeholder="form-control-sm"
                              />
                            </div>
                          </div>
                          <div class="mb-3">
                            <label
                              class="col-sm-3 form-control-label"
                              for="example-input-normal"
                              >Normal</label
                            >
                            <div class="col-sm-6">
                              <input
                                type="text"
                                id="example-input-normal"
                                name="example-input-normal"
                                class="form-control"
                                placeholder="Normal"
                              />
                            </div>
                          </div>
                          <div class="mb-3">
                            <label
                              class="col-sm-3 form-control-label"
                              for="example-input-large"
                              >Large</label
                            >
                            <div class="col-sm-6">
                              <input
                                type="text"
                                id="example-input-large"
                                name="example-input-large"
                                class="form-control form-control-lg"
                                placeholder="form-control-lg"
                              />
                            </div>
                          </div>
                          <div class="mb-3">
                            <label class="col-sm-3 form-control-label"
                              >Grid Sizes</label
                            >
                            <div class="col-sm-4">
                              <input
                                type="text"
                                class="form-control"
                                placeholder=".col-4"
                              />
                            </div>
                          </div>
                          <div class="mb-3">
                            <div class="col-sm-5 col-sm-offset-3">
                              <input
                                type="text"
                                class="form-control"
                                placeholder=".col-5"
                              />
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                <!-- ---------------------
                                                    end Input States
                                                ---------------- -->
              </div>
            </div>
          </section>
          <!-- --------------------------------------------------- -->
          <!--  Form Basic End -->
          <!-- --------------------------------------------------- -->
        </div>
      </div>
    <div class="dark-transparent sidebartoggler"></div>
    <div class="dark-transparent sidebartoggler"></div>
    </div>