<div class="survey_content">
    <?php $this->load->view('menu'); ?>
    <div class="layui-tab layui-tab-brief" lay-filter="docDemoTabBrief" lay-allowclose="true" style="margin-left:200px">
        <ul class="layui-tab-title">
            <li>添加模版</li>
        </ul>
        <div class="layui-tab-content" style="height: 100px;">
            <div class="layui-tab-item layui-show">
                <form class="layui-form" method="post">
                    <div class="layui-form-item">
                        <label class="layui-form-label">控件名称</label>
                        <div class="layui-input-inline">
                            <input type="text" name="title" required lay-verify="required"  placeholder="请输入标题"  class="layui-input">
                        </div>
                        <div class="layui-form-mid layui-word-aux">自定义控件名称</div>
                    </div>
                    <!-- 题目-->
                    <div class="layui-form-item">
                        <label class="layui-form-label">题目</label>
                        <div class="layui-input-block">
                            <input type="text" name="subject"  placeholder="请输入题目" autocomplete="off" class="layui-input">
                        </div>
                    </div>
                    <!--备注-->
                    <div class="layui-form-item">
                        <label class="layui-form-label">备注</label>
                        <div class="layui-input-block">
                            <input type="text" name="remark"  placeholder="请输入备注" autocomplete="off" class="layui-input">
                        </div>
                    </div>
                    <!--单选框-->
                    <div class="layui-form-item">
                        <label class="layui-form-label">选择框</label>
                        <div class="layui-input-block">
                            <select class="widgetType" >
                                <option value="0" selected>单选题</option>
                                <option value="1" >下拉题</option>
                                <option value="2">多选题</option>
                                <option value="3">单行文本题</option>
                                <option value="4">多行文本题</option>
                                <option value="5">量表题</option>
                                <option value="6">矩阵单选题</option>
                                <option value="7">矩阵多选题</option>
                            </select>
                            <div class="layui-unselect layui-form-select layui-form-selected">
                                <div class="layui-select-title"><input type="text" placeholder="请选择" value="请选择" class="layui-input layui-unselect"><i class="layui-edge"></i></div>
                                <dl class="layui-anim layui-anim-upbit">
                                    <dd lay-value="0" class="layui-this">单选题</dd>
                                    <dd lay-value="1" class="">下拉题</dd>
                                    <dd lay-value="2" class="">多选题</dd>
                                    <dd lay-value="3" class="">单行文本题</dd>
                                    <dd lay-value="4" class="">多行文本题</dd>
                                    <dd lay-value="5" class="">量表题</dd>
                                    <dd lay-value="6" class="">矩阵单选题</dd>
                                    <dd lay-value="7" class="">矩阵多选题</dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                    <!-- 选项-->
                    <div class="layui-form-item">
                        <div class="layui-input-block">
                            <input type="text" name="optionText1"  placeholder="选项" autocomplete="off" class="layui-input">
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <div class="layui-input-block">
                            <input type="text" name="optionText2"  placeholder="选项" autocomplete="off" class="layui-input">
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <div class="layui-input-block">
                            <input type="text" name="optionText3"  placeholder="选项" autocomplete="off" class="layui-input">
                        </div>
                    </div>
                    <!--提交-->
                    <div class="layui-form-item">
                        <div class="layui-input-block">
                            <button class="layui-btn"  id="widgetBtn" >确定</button>
                            <button type="reset" class="layui-btn layui-btn-primary">取消</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>