<?php

class LatestOrders extends MLibraryHelper
{
    protected function listLatestOrders()
    {
        $sales = App\Sale::latest()->get();
        $all_sales = [];

        foreach ($sales as $sale) {
            if (json_decode($sale->delivery_status)[0]->status == 'pending') {
                $all_sales[] = $sale;
            }
        }

        $this->loadPage(compact('all_sales'), 'sales_list');
    }

    protected function deleteOrder($id)
    {
        App\Sale::find($id)->delete();
    }

    /**
     * Get data for loading a page.
     *
     * @return array
     */
    protected function getPageData()
    {
        return [
            'page_name' => 'latest_orders'
        ];
    }

    /**
     * Get action method's suffix.
     *
     * @return string
     */
    protected function getMethodSuffix()
    {
        return 'Order';
    }

    protected function sales($para1 = '', $para2 = '')
    {
        if ($para1 == 'view') {
            $data['viewed'] = 'ok';
            $this->ci->db->where('sale_id', $para2);
            $this->ci->db->update('sale', $data);
            $page_data['sale'] = $this->ci->db->get_where('sale', array(
                'sale_id' => $para2
            ))->result_array();
            $this->ci->load->view('back/admin/sales_view', $page_data);
        } elseif ($para1 == 'send_invoice') {
            $page_data['sale'] = $this->ci->db->get_where('sale', array(
                'sale_id' => $para2
            ))->result_array();
            $text              = $this->ci->load->view('back/includes_top', $page_data);
            $text .= $this->ci->load->view('back/admin/sales_view', $page_data);
            $text .= $this->ci->load->view('back/includes_bottom', $page_data);
        } elseif ($para1 == 'delivery_payment') {
            $data['viewed'] = 'ok';
            $this->ci->db->where('sale_id', $para2);
            $this->ci->db->update('sale', $data);
            $page_data['sale_id']         = $para2;
            $page_data['payment_type']    = $this->ci->db->get_where('sale', array(
                'sale_id' => $para2
            ))->row()->payment_type;
            $page_data['payment_details'] = $this->ci->db->get_where('sale', array(
                'sale_id' => $para2
            ))->row()->payment_details;
            $delivery_status = json_decode($this->ci->db->get_where('sale', array(
                'sale_id' => $para2
            ))->row()->delivery_status,true);
            foreach ($delivery_status as $row) {
                if(isset($row['admin'])){
                    $page_data['delivery_status'] = $row['status'];
                }
            }
            $payment_status = json_decode($this->ci->db->get_where('sale', array(
                'sale_id' => $para2
            ))->row()->payment_status,true);
            foreach ($payment_status as $row) {
                if(isset($row['admin'])){
                    $page_data['payment_status'] = $row['status'];
                }
            }

            $this->ci->load->view('back/admin/sales_delivery_payment', $page_data);
        } elseif ($para1 == 'delivery_payment_set') {
            $delivery_status = json_decode($this->ci->db->get_where('sale', array(
                'sale_id' => $para2
            ))->row()->delivery_status,true);
            $new_delivery_status = array();
            foreach ($delivery_status as $row) {
                if(isset($row['admin'])){
                    $new_delivery_status[] = array('admin'=>'','status'=>$this->ci->input->post('delivery_status'),'delivery_time'=>$row['delivery_time']);
                } else {
                    $new_delivery_status[] = array('vendor'=>$row['vendor'],'status'=>$row['status'],'delivery_time'=>$row['delivery_time']);
                }
            }
            $payment_status = json_decode($this->ci->db->get_where('sale', array(
                'sale_id' => $para2
            ))->row()->payment_status,true);
            $new_payment_status = array();
            foreach ($payment_status as $row) {
                if(isset($row['admin'])) {
                    $new_payment_status[] = array('admin'=>'','status'=>$this->ci->input->post('payment_status'));
                } else {
                    $new_payment_status[] = array('vendor'=>$row['vendor'],'status'=>$row['status']);
                }
            }
            $data['payment_status']  = json_encode($new_payment_status);
            $data['delivery_status'] = json_encode($new_delivery_status);
            $data['payment_details'] = $this->ci->input->post('payment_details');
            $this->ci->db->where('sale_id', $para2);
            $this->ci->db->update('sale', $data);
        } elseif ($para1 == 'add') {
            $this->ci->load->view('back/admin/sales_add');
        } elseif ($para1 == 'total') {
            echo $this->ci->db->get('sale')->num_rows();
        }
    }

    public function __call($action = '', $id = '')
    {
        $this->sales($this->action, $id[0]);
    }
}
