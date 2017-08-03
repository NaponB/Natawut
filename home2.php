<!DOCTYPE html>
<html lang="en">
<head>
  <title>Natawut</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/box.css">
  <link rel="stylesheet" href="font-awesome/css/font-awesome.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jss.js"></script>
  <style>
  </style>
</head>
<body>
<div class="wrapper">
  <div class="header">
      <div class="row">
        <div class="col-md-12">
            <div class="col-md-6"></div>
            <div class="col-md-2"></div>
            <div class="col-md-2"><br><br><a>ยินดีต้อนรับ คุณธารารัตน์</></div>
            <div class="col-md-2"><br><br><a  href="logout.php">ออกจากระบบ</a></div>
        </div>
      </div>
  </div>
  <nav class="nav">
    <ul class="">
      <li><a  href="#">โปรโมชั่น</a></li>
      <li><a  href="menu.php">รายการอาหาร</a></li>
      <li><a  href="#">เครื่องดื่ม</a></li>
      <li><a  href="member.php">ข้อมูลส่วนตัว</a></li>
    </ul>
    <ul class="navbar-right">
      <li><a href="or_menu.php"><i class="fa fa-shopping-cart"></i><span class="badge">3</span></a></li>
    </ul>
  </nav>
  <div class="content">
      <div class="container">
  <div class="row">
    <article class="col-sm-12 col-md-12 col-lg-12 sortable-grid ui-sortable">
        <div id="wid-id-0">
            <header role="heading">
                <h2>Very Basic Wizard Example </h2>
            </header>
            <!-- widget div-->
            <div role="content">
                <!-- widget content -->
                <div class="widget-body">

                    <div class="row">
                        <form id="wizard-1" novalidate="novalidate">
                            <div id="bootstrap-wizard-1" class="col-sm-12">
                                <div class="form-bootstrapWizard">
                                    <ul class="bootstrapWizard form-wizard">
                                        <li class="active" data-target="#step1">
                                            <a href="#tab1" data-toggle="tab" class="active"> <span class="step">1</span> <span class="title">Basic information</span> </a>
                                        </li>
                                        <li data-target="#step2" class="">
                                            <a href="#tab2" data-toggle="tab"> <span class="step">2</span> <span class="title">Billing information</span> </a>
                                        </li>
                                        <li data-target="#step3" class="">
                                            <a href="#tab3" data-toggle="tab"> <span class="step">3</span> <span class="title">Domain Setup</span> </a>
                                        </li>
                                        <li data-target="#step4">
                                            <a href="#tab4" data-toggle="tab"> <span class="step">4</span> <span class="title">Save Form</span> </a>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab1">
                                        <br>
                                        <h3><strong>Step 1 </strong> - Basic Information</h3>
                                        <div class="col-md-3"></div>
                                        <div class="col-md-8">
                                            <div class="form-group">
                                              <label class="col-md-3 control-label">เลือกสาขา</label>
                                              <div class="col-md-6">
                                                <select id="where" name="where" class="form-control">
                                                  <option value="1">Option one</option>
                                                  <option value="2">Option two</option>
                                                </select>
                                              </div>
                                            </div><br><br>
                                            <div class="form-group">
                                              <label class="col-md-3 control-label">เลือกโต๊ะอาหาร</label>
                                              <div class="col-md-6">
                                                <select id="where" name="where" class="form-control">
                                                  <option value="1">Option one</option>
                                                  <option value="2">Option two</option>
                                                </select>
                                              </div>
                                            </div><br><br>
                                            <div class="form-group">
                                              <label class="col-md-3 control-label">เวลาที่จะมารับทานอาหาร</label>
                                              <div class="col-md-6">
                                                <input type="text" class="form-control">
                                              </div>
                                            </div><br><br>
                                            <!--<button class="btnn1 btn btn-default" type="submit">บันทึก</button>
                                            <button class=" btn btn-default" type="submit">ยกเลิก</button>-->
                                        </div>
                                        <div class="col-md-1"></div>
                                        <div class="form-actions">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <ul class="pager wizard no-margin">
                                                        <li class="previous disabled">
                                                            <a href="#" class="btn btn-lg btn-default"> Previous </a>
                                                        </li>
                                                        <li class="next">
                                                            <a href="#" class="btn btn-lg txt-color-darken"> Next </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab2">
                                        <br>
                                        <h3><strong>Step 2</strong> - Billing Information</h3>
                                        <table class="table table-hover">
                                          <thead>
                                              <tr>
                                                  <th>รายการอาหาร</th>
                                                  <th>จำนวน</th>
                                                  <th class="text-center">ราคา(บาท)</th>
                                                  <th class="text-center">ราคารวม(บาท)</th>
                                                  <th> </th>
                                              </tr>
                                          </thead>
                                          <tbody>
                                              <tr>
                                                  <td class="col-sm-8 col-md-6">
                                                  <div class="media">
                                                      <a class="thumbnail pull-left" href="#"> <img class="media-object" src="http://icons.iconarchive.com/icons/custom-icon-design/flatastic-2/72/product-icon.png" style="width: 72px; height: 72px;"> </a>
                                                      <div class="media-body">
                                                          <h4 class="media-heading">&nbsp;&nbsp;ชื่ออาหาร</h4>
                                                      </div>
                                                  </div></td>
                                                  <td class="col-sm-1 col-md-1" style="text-align: center">
                                                  <input type="number" class="form-control" id="exampleInputEmail1" value="3">
                                                  </td>
                                                  <td class="col-sm-1 col-md-1 text-center"><strong>$4.87</strong></td>
                                                  <td class="col-sm-1 col-md-1 text-center"><strong>$14.61</strong></td>
                                                  <td class="col-sm-1 col-md-1">
                                                  <button type="button" class="btn btn-danger">
                                                      <i class="fa fa-times" aria-hidden="true"></i>
                                                  </button></td>
                                              </tr>
                                              <tr>
                                                  <td class="col-md-6">
                                                  <div class="media">
                                                      <a class="thumbnail pull-left" href="#"> <img class="media-object" src="http://icons.iconarchive.com/icons/custom-icon-design/flatastic-2/72/product-icon.png" style="width: 72px; height: 72px;"> </a>
                                                      <div class="media-body">
                                                          <h4 class="media-heading">&nbsp;&nbsp;ชื่ออาหาร</h4>
                                                      </div>
                                                  </div></td>
                                                  <td class="col-md-1" style="text-align: center">
                                                  <input type="email" class="form-control" id="exampleInputEmail1" value="2">
                                                  </td>
                                                  <td class="col-md-1 text-center"><strong>$4.99</strong></td>
                                                  <td class="col-md-1 text-center"><strong>$9.98</strong></td>
                                                  <td class="col-md-1">
                                                  <button type="button" class="btn btn-danger">
                                                      <i class="fa fa-times" aria-hidden="true"></i>
                                                  </button></td>
                                              </tr>
                                          </tbody>
                                          <tfoot>
                                              <tr>
                                                  <td>   </td>
                                                  <td>   </td>
                                                  <td>   </td>
                                                  <td><h3>Total</h3></td>
                                                  <td class="text-right"><h3>$31.53</h3></td>
                                              </tr>
                                          </tfoot>
                                        </table>
                                        <div class="form-actions">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <ul class="pager wizard no-margin">
                                                        <li class="previous">
                                                            <a href="#" class="btn btn-lg btn-default"> Previous </a>
                                                        </li>
                                                        <li class="next disabled">
                                                            <a href="#" class="btn btn-lg txt-color-darken"> Next </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab3">
                                        <br>
                                        <h3><strong>Step 3</strong> - Domain Setup</h3>
                                        <div class="col-md-10">
                                          <div class="well">
                                            <h2 class="text-muted">Silver</h2>
                                            <p><span class="label label-default">POPULAR</span></p>
                                            <ul>
                                              <li>10 users</li>
                                              <li>Unlimited access</li>
                                              <li>3TB of space</li>
                                              <li>E-mail support</li>
                                            </ul>          
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta.</p>
                                            <hr>
                                            <h3>$15.99 / month</h3>
                                            <hr>
                                            <p><a class="btn btn-default btn-lg" href="#"><i class="icon-ok"></i> Select plan</a></p>
                                          </div>
                                        </div>
                                        <div class="form-actions">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <ul class="pager wizard no-margin">
                                                        <li class="previous">
                                                            <a href="#" class="btn btn-lg btn-default"> ย้อนกลับ </a>
                                                        </li>
                                                        <li class="next disabled">
                                                            <a href="#" class="btn btn-lg txt-color-darken"> ยืนยันการสั่งจองอาหาร </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab4">
                                        <br>
                                        <h3><strong>Step 4</strong> - Save Form</h3>
                                        <br>
                                        <h1 class="text-center text-success"><strong><i class="fa fa-check fa-lg"></i> Complete</strong></h1>
                                        <h4 class="text-center">Click next to finish</h4>
                                        <br>
                                        <br>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
                <!-- end widget content -->

            </div>
            <!-- end widget div -->

        </div>
        <!-- end widget -->

    </article>
</div>
</div>
  </div>
</div>
</body>
</html>
