 <!DOCTYPE html>
<html>
<body>   
    <form class="search-form" action="/sdb/?q=search/node" method="post" id="search-form" accept-charset="UTF-8">
      <div>
        <div class="container-inline form-wrapper" id="edit-basic">
          <div class="form-item form-type-textfield form-item-keys">
            <label for="edit-keys">Enter your keywords </label>
            <input type="text" id="edit-keys" name="keys" value="" size="40" maxlength="255" class="form-text" />
          </div>

          <input type="submit" id="edit-submit" name="op" value="Search" class="form-submit" />
        </div>
        <input type="hidden" name="form_build_id" value="form-GNaUiSr2Lt6pTiiXFP5Vz9f5OG7TteLozS9nXN8le3k" />
        <input type="hidden" name="form_id" value="search_form" />
        <fieldset class="search-advanced collapsible collapsed form-wrapper" id="edit-advanced"><legend><span class="fieldset-legend">Advanced search</span></legend>
          <div class="fieldset-wrapper">
            <div class="criterion">
              <div class="form-item form-type-textfield form-item-or">
                <label for="edit-or">Containing any of the words </label>
                <input type="text" id="edit-or" name="or" value="" size="30" maxlength="255" class="form-text" />
              </div>
              
              <div class="form-item form-type-textfield form-item-phrase">
                <label for="edit-phrase">Containing the phrase </label>
                <input type="text" id="edit-phrase" name="phrase" value="" size="30" maxlength="255" class="form-text" />
              </div>
              
              <div class="form-item form-type-textfield form-item-negative">
                <label for="edit-negative">Containing none of the words </label>
                <input type="text" id="edit-negative" name="negative" value="" size="30" maxlength="255" class="form-text" />
              </div>
            </div>
            <div class="criterion">
              <div class="form-item form-type-checkboxes form-item-type">
                <label for="edit-type">Only of the type(s) </label>
                <div id="edit-type" class="form-checkboxes">
                  <div class="form-item form-type-checkbox form-item-type-article">
                    <input type="checkbox" id="edit-type-article" name="type[article]" value="article" class="form-checkbox" />  
                    <label class="option" for="edit-type-article">Article </label>
                  </div>
                  
                  <div class="form-item form-type-checkbox form-item-type-page">
                    <input type="checkbox" id="edit-type-page" name="type[page]" value="page" class="form-checkbox" />  
                    <label class="option" for="edit-type-page">Basic page </label>

                  </div>
                </div>
              </div>
            </div>
            <div class="action"><input type="submit" id="edit-submit--2" name="op" value="Advanced search" class="form-submit" />
            </div>
          </div>
        </fieldset>
      </div>
    </form>


</body>
</html>