package com.example.lostandfound.mapper;

import com.example.lostandfound.model.Message;
import org.apache.ibatis.annotations.Select;

import java.util.List;

public interface MessageMapper {
    /**
     * This method was generated by MyBatis Generator.
     * This method corresponds to the database table Message
     *
     * @mbg.generated Wed May 22 17:34:48 CST 2019
     */
    int deleteByPrimaryKey(Integer msgid);

    /**
     * This method was generated by MyBatis Generator.
     * This method corresponds to the database table Message
     *
     * @mbg.generated Wed May 22 17:34:48 CST 2019
     */
    int insert(Message record);

    /**
     * This method was generated by MyBatis Generator.
     * This method corresponds to the database table Message
     *
     * @mbg.generated Wed May 22 17:34:48 CST 2019
     */
    int insertSelective(Message record);

    /**
     * This method was generated by MyBatis Generator.
     * This method corresponds to the database table Message
     *
     * @mbg.generated Wed May 22 17:34:48 CST 2019
     */
    Message selectByPrimaryKey(Integer msgid);

    /**
     * This method was generated by MyBatis Generator.
     * This method corresponds to the database table Message
     *
     * @mbg.generated Wed May 22 17:34:48 CST 2019
     */
    int updateByPrimaryKeySelective(Message record);

    /**
     * This method was generated by MyBatis Generator.
     * This method corresponds to the database table Message
     *
     * @mbg.generated Wed May 22 17:34:48 CST 2019
     */
    int updateByPrimaryKey(Message record);

    @Select("SELECT max(msgId) FROM Message")
    String getMaxId();

    @Select("SELECT * FROM Message WHERE sendUsrId=#{userid} and itemId=#{itemid}")
    List<Message> getMsgMeSent(int userid, int itemid);

    @Select("SELECT * FROM Message WHERE toUsrId=#{userid} and itemId=#{itemid}")
    List<Message> getMsgMeReceived(int userid, int itemid);

    @Select("SELECT COUNT(*) FROM Message WHERE toUsrId=#{userid} and status=0")
    int getUncheckedMsgNum(int userid);

    @Select("SELECT * FROM Message WHERE toUsrId=#{userId} " +
            "ORDER BY createDatetime")
    List<Message> getmsgList(int userId);
}