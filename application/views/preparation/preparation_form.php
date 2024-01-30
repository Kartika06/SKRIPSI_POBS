<!-- begin #content -->
</br>
</br>
<div id="content" class="content">
<!-- begin breadcrumb -->
  <ol class="breadcrumb pull-right">
    <li class="breadcrumb-item"><a href="javascript:;">Dashboard</a></li>
    <li class="breadcrumb-item active">Preparation</li>
  </ol>
      <!-- end breadcrumb -->
      <!-- begin page-header -->
<h3 class="page-header"><b>Preparation Of WIP</b><small> <b>||</b> Point of Blended System <b>||</b></small></h3>
<!-- end page-header -->
<div class="row">
        <!-- begin col-6 -->
        <div class="col-lg-6">
          <!-- begin panel -->
          <div class="panel panel-inverse" data-sortable-id="form-validation-1">
            <!-- begin panel-heading -->
            <div class="panel-heading">
              <div class="panel-heading-btn">
                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
              </div>
              <h4 class="panel-title">Form Preparation Of WIP</h4>
            </div>
            <!-- end panel-heading -->
            <!-- begin panel-body -->
            <div class="panel-body">
              <form class="form-horizontal" data-parsley-validate="true" name="demo-form">
                <div class="form-group row m-b-15">
                  <label class="col-md-4 col-sm-4 col-form-label" for="fullname">OKP * :</label>
                  <div class="col-md-8 col-sm-8">
                    <input class="form-control" type="text" id="batch_name" name="batch_name" placeholder="Required" data-parsley-required="true" />
                  </div>
                </div>
                <div class="form-group row m-b-15">
                  <label class="col-md-4 col-sm-4 col-form-label">Product Name :</label>
                  <div class="col-md-8 col-sm-8">
                    <select class="form-control" id="select-required" name="selectBox" data-parsley-required="true">
                      <option value="">Please choose</option>
                      <option value="foo">Foo</option>
                      <option value="bar">Bar</option>
                    </select>
                  </div>
                </div>
                <div class="form-group row m-b-15">
                  <label class="col-md-4 col-sm-4 col-form-label" for="website">Quantity :</label>
                  <div class="col-md-8 col-sm-8">
                    <input class="form-control" type="url" id="masked-input-phone" name="qty" data-parsley-type="url" placeholder="url" />
                  </div>
                </div>
                <div class="form-group row m-b-15">
                  <label class="col-md-4 col-sm-4 col-form-label" for="message">Message (20 chars min, 200 max) :</label>
                  <div class="col-md-8 col-sm-8">
                    <textarea class="form-control" id="message" name="message" rows="4" data-parsley-range="[20,200]" placeholder="Range from 20 - 200"></textarea>
                  </div>
                </div>
                <div class="form-group row m-b-15">
                  <label class="col-md-4 col-sm-4 col-form-label" for="message">Digits :</label>
                  <div class="col-md-8 col-sm-8">
                    <input class="form-control" type="text" id="digits" name="digits" data-parsley-type="digits" placeholder="Digits" />
                  </div>
                </div>
                <div class="form-group row m-b-15">
                  <label class="col-md-4 col-sm-4 col-form-label" for="message">Number :</label>
                  <div class="col-md-8 col-sm-8">
                    <input class="form-control" type="text" id="number" name="number" data-parsley-type="number" placeholder="Number" />
                  </div>
                </div>
                <div class="form-group row m-b-0">
                  <label class="col-md-4 col-sm-4 col-form-label">&nbsp;</label>
                  <div class="col-md-8 col-sm-8">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </div>
              </form>
            </div>
            <!-- end panel-body -->
            
          </div>
          <!-- end panel -->
        </div>
        <!-- end col-6 -->
        <!-- begin col-6 -->
        <div class="col-lg-6">
          <!-- begin panel -->
          <div class="panel panel-inverse" data-sortable-id="form-validation-2">
            <!-- begin panel-heading -->
            <div class="panel-heading">
              <div class="panel-heading-btn">
                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
              </div>
              <h4 class="panel-title">Extra Validation Field</h4>
            </div>
            <!-- end panel-heading -->
            <!-- begin panel-body -->
            <div class="panel-body">
              <form data-parsley-validate="true">
                <div class="form-group row m-b-15">
                  <label class="col-md-4 col-sm-4 col-form-label">AlphaNum* :</label>
                  <div class="col-md-8 col-sm-8">
                    <input class="form-control" type="text" id="alphanum" name="alphanum"  data-parsley-type="alphanum" placeholder="Alphanumeric String."  data-parsley-required="true" />
                  </div>
                </div>
                <div class="form-group row m-b-15">
                  <label class="col-md-4 col-sm-4 col-form-label">Required Select Box :</label>
                  <div class="col-md-8 col-sm-8">
                    <select class="form-control" id="select-required" name="selectBox" data-parsley-required="true">
                      <option value="">Please choose</option>
                      <option value="foo">Foo</option>
                      <option value="bar">Bar</option>
                    </select>
                  </div>
                </div>
                <div class="form-group row m-b-15">
                  <label class="col-md-4 col-sm-4 col-form-label">Required Radio Button :</label>
                  <div class="col-md-8 col-sm-8">
                    <div class="form-check">
                      <input type="radio" class="form-check-input" name="radiorequired" value="foo" id="radio-required" data-parsley-required="true" />
                      <label class="form-check-label">Radio Button 1</label>
                    </div>
                    <div class="form-check">
                      <input type="radio" class="form-check-input" name="radiorequired" id="radio-required2" value="bar" />
                      <label class="form-check-label">Radio Button 2</label>
                    </div>
                    <div class="form-check">
                      <input type="radio" class="form-check-input" name="radiorequired" id="radio-required3" value="key" /> 
                      <label class="form-check-label">Radio Button 2</label>
                    </div>
                  </div>
                </div>
                <div class="form-group row m-b-15">
                  <label class="col-md-4 col-sm-4 col-form-label">Check at least 2 checkboxes :</label>
                  <div class="col-md-8 col-sm-8">
                    <div class="form-check">
                      <input type="checkbox" class="form-check-input" id="mincheck" name="mincheck[]" data-parsley-mincheck="2" value="foo" required /> 
                      <label class="form-check-label">Checkbox 1</label>
                    </div>
                    <div class="form-check">
                      <input type="checkbox" class="form-check-input" name="mincheck[]" value="bar" /> 
                      <label class="form-check-label">Checkbox 2</label>
                    </div>
                    <div class="form-check">
                      <input type="checkbox" class="form-check-input" name="mincheck[]" value="baz" />
                      <label class="form-check-label">Checkbox 3</label>
                    </div>
                  </div>
                </div>
                <div class="form-group row m-b-15">
                  <label class="col-md-4 col-sm-4 col-form-label">Regular Expression :</label>
                  <div class="col-md-8 col-sm-8">
                    <input class="form-control parsley-validated" type="text" id="data-regexp" data-parsley-pattern="#[A-Fa-f0-9]{6}" placeholder="hexa color code" data-required="true" />
                  </div>
                </div>
                <div class="form-group row m-b-0">
                  <label class="col-md-4 col-sm-4 col-form-label">&nbsp;</label>
                  <div class="col-md-8 col-sm-8">
                    <button type="submit" class="btn btn-danger">Validate</button>
                  </div>
                </div>
              </form>
            </div>
            <!-- end panel-body -->
            <!-- begin hljs-wrapper -->
            
            <!-- end hljs-wrapper -->
          </div>
          <!-- end panel -->
        </div>
        <!-- end col-6 -->
      </div>
      <!-- end row -->