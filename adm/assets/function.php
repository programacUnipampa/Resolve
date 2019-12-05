<?php
    function alert($titulo, $descricao){
        echo "
            <div class='modal' tabindex='-1' role='dialog' id='teste' data-show='true'>
                <div class='modal-dialog' role='document'>
                    <div class='modal-content'>
                        <div class='modal-header'>
                            <h5 class='modal-title'>$titulo</h5>
                            <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                <span aria-hidden='true'>&times;</span>
                            </button>
                        </div>
                        <div class='modal-body'>
                            <p>$descricao</p>
                        </div>
                        <div class='modal-footer'>
                            <button type='button' class='btn btn-outline-secondary' data-dismiss='modal'>Fechar</button>
                        </div>
                    </div>
                </div>
            </div>
            
            
            <script>
            
                $('#teste').modal('show')
            </script>
      
        ";
    }




?>