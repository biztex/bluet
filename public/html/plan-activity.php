                        <div class="activity-section-">
                            <div class="form-group row mt-3">
                                <label class="col-md-2 col-form-label text-md-right"><span class="badge badge-danger">必須</span> 体験時間 (<span class="added-activity-number-"></span>)</label>
                                <div class="col-md-3">
                                    <div type="" class="btn btn-default" name='delete-activity-' value=''>
                                        <i class="fas fa-fw fa-window-close"></i> この体験時間を削除
                                    </div>
                                </div>
                            <hr />
                            </div>
                            <div class="form-group row">
                                <label class="col-md-2 col-form-label text-md-right">【名称】</label>
                                <div class="col-md-6">
                                    <input id="" type="text" class="form-control activity-group" name="activity_name" value="" placeholder="※最大30文字まで">
                                </div>
                            </div>
                            <div class="form-group row mt-5">
                                <label class="col-md-2 col-form-label text-md-right" style="padding: 0 0 3px 0;">【時間】</label>
                                <label class="radio-inline">
                                  <input class="ml-5" type="radio" name="activity_is_overday" value="0" checked> <span> 日をまたがない</span>
                                </label>
                                <label class="checkbox-inline">
                                  <input class="ml-5" type="radio" name="activity_is_overday" value="1"> <span> 日をまたいで設定する</span>
                                </label>
                            </div>
                            <div class="form-group row ml-5">
                                <div class="col-md-1 ml-5">
                                    <select class="form-control ml-5" name="activity_start_hour">
                                      <option value="00">00</option>
                                      <option value="01">01</option>
                                      <option value="02">02</option>
                                      <option value="03">03</option>
                                      <option value="04">04</option>
                                      <option value="05">05</option>
                                      <option value="06">06</option>
                                      <option value="07">07</option>
                                      <option value="08">08</option>
                                      <option value="09">09</option>
                                      <option value="10">10</option>
                                      <option value="11">11</option>
                                      <option value="12">12</option>
                                      <option value="13">13</option>
                                      <option value="14">14</option>
                                      <option value="15">15</option>
                                      <option value="16">16</option>
                                      <option value="17">17</option>
                                      <option value="18">18</option>
                                      <option value="19">19</option>
                                      <option value="20">20</option>
                                      <option value="21">21</option>
                                      <option value="22">22</option>
                                      <option value="23">23</option>
                                    </select>
                                </div>
                                <div class="col-md-1 ml-5">
                                    <select class="form-control" name="activity_start_minute">
                                      <option value="00">00</option>
                                      <option value="05">05</option>
                                      <option value="10">10</option>
                                      <option value="15">15</option>
                                      <option value="20">20</option>
                                      <option value="25">25</option>
                                      <option value="30">30</option>
                                      <option value="35">35</option>
                                      <option value="40">40</option>
                                      <option value="45">45</option>
                                      <option value="50">50</option>
                                      <option value="55">55</option>
                                    </select>
                                </div>
                                <label class="col-md-1 col-form-label text-md-center">〜</label>
                                <div class="col-md-1 overday-section" style="display: none;">
                                    <select class="form-control" name="activity_days_after">
                                      <option value="00">00</option>
                                      <option value="01">01</option>
                                      <option value="02">02</option>
                                      <option value="03">03</option>
                                      <option value="04">04</option>
                                      <option value="05">05</option>
                                      <option value="06">06</option>
                                    </select>
                                </div>
                                <label class="col-md-1 col-form-label text-md-center overday-section" style="display:none;">日後の</label>
                                <div class="col-md-1">
                                    <select class="form-control" name="activity_end_hour">
                                      <option value="00">00</option>
                                      <option value="01">01</option>
                                      <option value="02">02</option>
                                      <option value="03">03</option>
                                      <option value="04">04</option>
                                      <option value="05">05</option>
                                      <option value="06">06</option>
                                      <option value="07">07</option>
                                      <option value="08">08</option>
                                      <option value="09">09</option>
                                      <option value="10">10</option>
                                      <option value="11">11</option>
                                      <option value="12">12</option>
                                      <option value="13">13</option>
                                      <option value="14">14</option>
                                      <option value="15">15</option>
                                      <option value="16">16</option>
                                      <option value="17">17</option>
                                      <option value="18">18</option>
                                      <option value="19">19</option>
                                      <option value="20">20</option>
                                      <option value="21">21</option>
                                      <option value="22">22</option>
                                      <option value="23">23</option>
                                    </select>
                                </div>
                                <div class="col-md-1">
                                    <select class="form-control" name="activity_end_minute">
                                      <option value="00">00</option>
                                      <option value="05">05</option>
                                      <option value="10">10</option>
                                      <option value="15">15</option>
                                      <option value="20">20</option>
                                      <option value="25">25</option>
                                      <option value="30">30</option>
                                      <option value="35">35</option>
                                      <option value="40">40</option>
                                      <option value="45">45</option>
                                      <option value="50">50</option>
                                      <option value="55">55</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row mt-5">
                                <label class="col-md-2 col-form-label text-md-right" style="padding: 0 0 3px 0;">【期間】</label>
                                <label class="radio-inline">
                                  <input class="ml-5" type="radio" name="activity_period_flag" value="0" checked> <span> 開催期間と同じ</span>
                                </label>
                                <label class="checkbox-inline">
                                  <input class="ml-5" type="radio" name="activity_period_flag" value="1"> <span> 開催期間とは別に指定する</span>
                                </label>
                            </div>
                            <div class="form-group row ml-5 activity_day_section" style="display: none;">
                                <div class="col-md-2 ml-5">
                                    <input id="" type="date" class="form-control ml-5" name="activity_start_day" value="">
                                </div>
                                <label class="ml-5 col-md-1 col-form-label text-md-center">〜</label>
                                <div class="col-md-2">
                                    <input id="" type="date" class="form-control" name="activity_end_day" value="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-6">
                                </div>
                            </div>
                        </div>                            
                        <div class="after-activity-section-"></div>


