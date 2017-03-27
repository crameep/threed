          <div class="column is-3 board" id="b1">
            <div class="box is-gray">
              <div class="head">
                <div class="name">{{ $name }}</div>
                <div class="count">{{ $count }}</div>
                <div class="options"><i class="fa fa-ellipsis-h"></i></div>
              </div>
              <div class="items">
              @component('components._eventpanel')
                @slot('date')
                Tomorrow
                @endslot

                @slot('targets')
                30
                @endslot
              @endcomponent
                <div class="add-card">
                 <div onclick="addCard(this)">
                  <i class="fa fa-plus-circle"></i> 
                  Add new card
                </div>
              </div>
            </div>
          </div>
        </div>