<html>

  <div class="content">

    <nav class="nav navbar navbar-expand-md col">
      <a class="navbar-brand tx-bold tx-spacing--2 order-1" href="javascript:">Водители</a>
      <button class="navbar-toggler order-2" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="wd-20 ht-20 fa fa-ellipsis-v"></i>
      </button>

      <div class="collapse navbar-collapse order-2" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link active" href="#" data-ajax="{'target':'#{{_form}}List','filter_remove': 'active'}">Все
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" data-ajax="{'target':'#{{_form}}List','filter_remove': 'active','filter_add':{'active':'on'}}">Активные</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" data-ajax="{'target':'#{{_form}}List','filter_remove': 'active','filter_add':{ 'active': { '$ne': 'on' } } }">Скрытые</a>
          </li>
        </ul>
        <form class="form-inline mg-t-10 mg-lg-0">
              <input class="form-control search-header" type="search" placeholder="Поиск..." aria-label="Поиск..."
               data-ajax="{'target':'#{{_form}}List','filter_add':{'$or':[{ 'id' : {'$like' : '$value'} }, { 'first_name': {'$like' : '$value'} }, { 'last_name': {'$like' : '$value'} },{ 'phone': {'$like' : '$value'} },{ 'email': {'$like' : '$value'} } ]} }">

          <button class="btn btn-success" type="button" data-ajax="{'url':'/cms/ajax/form/{{_form}}/edit/_new','html':'.drivers-edit-modal'}">Создать</button>
        </form>
      </div>
    </nav>


    <div class="list-group m-2" id="{{_form}}List">
      <wb-foreach data-ajax="{'url':'/ajax/form/drivers/list/','size':'{{_sett.page_size}}','filter':{ 'isgroup': { '$ne': 'on' } },'bind':'cms.list.drivers','render':'client'}">
        <div class="list-group-item d-flex align-items-center">
          {{#if !isgroup}}
            <div>
              <a href="javascript:" data-ajax="{'url':'/cms/ajax/form/drivers/edit/{{_id}}','html':'.drivers-edit-modal','modal':'#{{_form}}ModalEdit'}"
                class="tx-13 tx-inverse tx-semibold mg-b-0">
                <i class="ri-user-3-line"></i> {{first_name}} {{last_name}}
                <span class="badge badge-secondary"><i class="ri-group-line"></i> {{role}}</span>
              </a>
              <span class="d-block tx-11 text-muted">
                {{#if email}}
                  <nobr><i class="ri-mail-line"></i> {{email}}</nobr>
                {{/if}}
                {{#if phone}}
                  <nobr><i class="ri-phone-line"></i> {{phone}}</nobr>
                {{/if}}
              </span>
            </div>
          {{else}}
            <div>
              <i class="fa fa-drivers"></i>
              <a href="javascript:" data-ajax="{'url':'/cms/ajax/form/drivers/edit/{{_id}}','html':'.drivers-edit-modal','modal':'#{{_form}}ModalEdit'}"
                class="tx-13 tx-inverse tx-semibold mg-b-0">{{_id}}</a>
            </div>
          {{/if}}

          <div class="custom-control custom-switch pos-absolute r-80">
            {{#if active=='on' }}
              <input type="checkbox" class="custom-control-input" name="active" checked id="{{_form}}SwitchItemActive{{ @index }}"
                onchange="wbapp.save($(this),{'table':'{{_form}}','id':'{{_id}}','field':'active'})">
            {{/if}}
            {{#if active !='on' }}
              <input type="checkbox" class="custom-control-input" name="active" id="{{_form}}SwitchItemActive{{ @index }}"
                onchange="wbapp.save($(this),{'table':'{{_form}}','id':'{{_id}}','field':'active'})">
            {{/if}}
            <label class="custom-control-label" for="{{_form}}SwitchItemActive{{ @index }}">&nbsp;</label>
          </div>

          <a href="javascript:" data-ajax="{'url':'/cms/ajax/form/drivers/edit/{{_id}}','html':'.drivers-edit-modal'}"
            class="pos-absolute r-50 tx-16"><i class="ri-file-edit-line"></i></a>
          <a href="javascript:" data-ajax="{'url':'/ajax/rmitem/{{_form}}/{{_id}}','update':'cms.list.drivers','html':'.drivers-edit-modal'}"
            class="pos-absolute r-20 tx-16 tx-danger"><i class="ri-delete-bin-2-line"></i></a>
        </div>
      </wb-foreach>
      <wb-jq wb="{'append':'#{{_form}}List template','render':'client'}" >
        <wb-snippet wb-name="pagination"/>
      </wb-jq>
    </div>
  </div>


<div class="drivers-edit-modal"></div>

</html>
