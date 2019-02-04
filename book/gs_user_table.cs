using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Gs_db
{
    #region Gs_user_table
    public class Gs_user_table
    {
        #region Member Variables
        protected int _id;
        protected string _name;
        protected string _lid;
        protected string _lpw;
        protected int _kanri_flg;
        protected int _life_flg;
        #endregion
        #region Constructors
        public Gs_user_table() { }
        public Gs_user_table(string name, string lid, string lpw, int kanri_flg, int life_flg)
        {
            this._name=name;
            this._lid=lid;
            this._lpw=lpw;
            this._kanri_flg=kanri_flg;
            this._life_flg=life_flg;
        }
        #endregion
        #region Public Properties
        public virtual int Id
        {
            get {return _id;}
            set {_id=value;}
        }
        public virtual string Name
        {
            get {return _name;}
            set {_name=value;}
        }
        public virtual string Lid
        {
            get {return _lid;}
            set {_lid=value;}
        }
        public virtual string Lpw
        {
            get {return _lpw;}
            set {_lpw=value;}
        }
        public virtual int Kanri_flg
        {
            get {return _kanri_flg;}
            set {_kanri_flg=value;}
        }
        public virtual int Life_flg
        {
            get {return _life_flg;}
            set {_life_flg=value;}
        }
        #endregion
    }
    #endregion
}