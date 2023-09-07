<?php

    class Home extends Controllers{
        public function __construct(){
            
            parent::__construct();

        }

        public function home(){
            $data['page_id']=1;
            $data['page_tag']="Home";
            $data['page_title']="Pagina principal";
            $data['page_name']="home";
            $data['page_content']="Lorem ipsum dolor sit amet 
                                    consectetur adipisicing elit. In neque ex nulla 
                                    oluptatibus culpa dolore, suscipit fugiat quae!
                                    Tempore et minus aliquid cupiditate numquam optio nostrum 
                                    eius cumque aliquam non!";
            $this->views->getView($this,"home",$data);
        }

    }

?>